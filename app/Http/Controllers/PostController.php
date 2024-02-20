<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Intervention\Image\Laravel\Facades\Image;

class PostController extends Controller
{


    public function slug($string, $separator = '-') {

        if (is_null($string)) {
            return "";
        }

        $string = trim($string);

        $string = mb_strtolower($string, "UTF-8");;

        $string = preg_replace("/[^a-z0-9_\sءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/", "", $string);

        $string = preg_replace("/[\s-]+/", " ", $string);

        $string = preg_replace("/[\s_]/", $separator, $string);

        return $string;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('dashboard.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('published',1)->get();
        $tags = Tag::where('is_published',1)->get();

        if(!count($categories)) {
            return redirect()->to('dashboard/categories')->with('success','Please Create A Category');
        }

        return view('dashboard.posts.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Start Post Validation

        $request->validate([
            'title' => 'required|min:5|max:255|unique:posts',
            'category_id' => 'required',
            'content' => 'required|min:20',

            'thumbnail'=> [
                'required',
                File::types([
                    'jpg','gif','png','webp','svg'
                ])->max(1024 * 5)
            ],
            'thumbnail_en'=> [
                File::types([
                    'jpg','gif','png','webp','svg'
                ])->max(1024 * 5)
            ],
            'thumbnail_fr'=> [
                File::types([
                    'jpg','gif','png','webp','svg'
                ])->max(1024 * 5)
            ],
            'thumbnail_de'=> [
                File::types([
                    'jpg','gif','png','webp','svg'
                ])->max(1024 * 5)
            ]
        ]);

        // End Post Validation


        Storage::makeDirectory('public/posts');
        Storage::makeDirectory('public/posts/ar');
        Storage::makeDirectory('public/posts/fr');
        Storage::makeDirectory('public/posts/de');
        Storage::makeDirectory('public/posts/en');


        // Start Image Upload

        $image = $imageFR = $imageEN = $imageDE = '';

        $ext = $request->file('thumbnail')->extension();

        $image = $this->resizeImage(Str::slug($request->title,'-','ar') . '-original.' . $ext ,'storage/posts/ar/',$request->file('thumbnail'));
        $this->resizeImage(Str::slug($request->title,'-','ar') . '-small.' . $ext,'storage/posts/ar/',$request->file('thumbnail'),150,150);
        $this->resizeImage(Str::slug($request->title,'-','ar') . '-medium.' . $ext,'storage/posts/ar/',$request->file('thumbnail'),300,300);
        $this->resizeImage(Str::slug($request->title,'-','ar') . '-large.' . $ext,'storage/posts/ar/',$request->file('thumbnail'),1024,1024);


        if(!empty($request->file('thumbnail_en'))) {
            $ext = $request->file('thumbnail_en')->extension();
            $imageEN = $this->resizeImage(Str::slug($request->title_en) . '-original.' . $ext ,'storage/posts/en/',$request->file('thumbnail_en'));
            $this->resizeImage(Str::slug($request->title_en) . '-small.' . $ext,'storage/posts/en/',$request->file('thumbnail_en'),150,150);
            $this->resizeImage(Str::slug($request->title_en) . '-medium.' . $ext,'storage/posts/en/',$request->file('thumbnail_en'),300,300);
            $this->resizeImage(Str::slug($request->title_en) . '-large.' . $ext,'storage/posts/en/',$request->file('thumbnail_en'),1024,1024);
        }

        if(!empty($request->file('thumbnail_fr'))) {
            $ext = $request->file('thumbnail_fr')->extension();
            $imageFR = $this->resizeImage(Str::slug($request->title_fr) . '-original.' . $ext ,'storage/posts/fr/',$request->file('thumbnail_fr'));
            $this->resizeImage(Str::slug($request->title_fr) . '-small.' . $ext,'storage/posts/fr/',$request->file('thumbnail_fr'),150,150);
            $this->resizeImage(Str::slug($request->title_fr) . '-medium.' . $ext,'storage/posts/fr/',$request->file('thumbnail_fr'),300,300);
            $this->resizeImage(Str::slug($request->title_fr) . '-large.' . $ext,'storage/posts/fr/',$request->file('thumbnail_fr'),1024,1024);
        }

        if(!empty($request->file('thumbnail_de'))) {
            $ext = $request->file('thumbnail_de')->extension();
            $this->resizeImage(Str::slug($request->title_de) . '-original.' . $ext ,'storage/posts/de/',$request->file('thumbnail_de'));
            $imageDE = $this->resizeImage(Str::slug($request->title_de) . '-small.' . $ext,'storage/posts/de/',$request->file('thumbnail_de'),150,150);
            $this->resizeImage(Str::slug($request->title_de) . '-medium.' . $ext,'storage/posts/de/',$request->file('thumbnail_de'),300,300);
            $this->resizeImage(Str::slug($request->title_de) . '-large.' . $ext,'storage/posts/de/',$request->file('thumbnail_de'),1024,1024);
        }

        // End Image Upload

        // Start Store Post To Database

        $created = Category::find($request->category_id)->posts()->create([
            'title' => $request->title,
            'title_fr' => $request->title_fr,
            'title_en' => $request->title_en,
            'title_de' => $request->title_de,
            'slug' => $request->slug ?? Str::slug($request->title,'-','ar'),
            'slug_en' => $request->slug_en ?? Str::slug($request->title_en),
            'slug_fr' => $request->slug_fr ?? Str::slug($request->title_fr,'-','fr'),
            'slug_de' => $request->slug_de ?? Str::slug($request->title_de,'-','de'),
            'category_id' => $request->category_id,
            'content' => $request['content'],
            'content_fr' => $request['content_fr'],
            'content_en' => $request['content_en'],
            'content_de' => $request['content_de'],
            'is_published' => ($request->is_published) ? 1 : 0,
            'thumbnail' => $image,
            'thumbnail_en' => $imageEN ?? $image,
            'thumbnail_fr' => $imageFR ?? $image,
            'thumbnail_de' => $imageDE ?? $image
        ]);

        // End Store Post To Database

        $created -> tags()-> attach($request->tags);

        if($created) {

            return redirect()->to('dashboard/posts')->with([
                'success' =>  "post created successfully"
            ]);
        }

        abort(500);

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $selectedTags = array_map(function ($tag) {
            return $tag['id'];
        },$post->tags->toArray());

        $tags = Tag::where('is_published',1)->get();
        $categories = Category::where('published',1)->get();
        return view('dashboard.posts.edit',compact('categories','post','tags','selectedTags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // Start Post Validation

        $request->validate([

            'title' => 'required|min:5|max:255|unique:posts,title,' . $post->id,
            'title_en' => 'max:255|unique:posts,title_en,' . $post->id,
            'title_fr' => 'max:255|unique:posts,title_fr,' . $post->id,
            'title_de' => 'max:255|unique:posts,title_de,' . $post->id,
            'category_id' => 'required',
            'content' => 'required|min:20',

            'thumbnail'=> [
                File::types([
                    'jpg','gif','png','webp','svg'
                ])->max(1024 * 5)
            ],
            'thumbnail_en'=> [
                File::types([
                    'jpg','gif','png','webp','svg'
                ])->max(1024 * 5)
            ],
            'thumbnail_fr'=> [
                File::types([
                    'jpg','gif','png','webp','svg'
                ])->max(1024 * 5)
            ],
            'thumbnail_de'=> [
                File::types([
                    'jpg','gif','png','webp','svg'
                ])->max(1024 * 5)
            ]
        ]);

        // End Post Validation

        // Start Image Upload

        $image = explode('-medium',implode('',explode('posts/ar/',$post->thumbnail)));
        $imageEn = explode('-medium',implode('',explode('posts/fr/',$post->thumbnail_fr))) ?? "";
        $imageFR = explode('-medium',implode('',explode('posts/en/',$post->thumbnail_en))) ?? "";
        $imageDE = explode('-medium',implode('',explode('posts/de/',$post->thumbnail_de))) ?? "";


        if(!empty($request->file('thumbnail'))) {

            Storage::delete('public/posts/ar/' . $image[0] . '-small' . $image[1]);
            Storage::delete('public/posts/ar/' . $image[0] . '-medium' . $image[1]);
            Storage::delete('public/posts/ar/' . $image[0] . '-large' . $image[1]);
            Storage::delete('public/posts/ar/' . $image[0] . '-original' . $image[1]);


            if($post -> thumbnail == $post -> thumbnail_en) {
                $imageEN = $image;
            }

            if($post -> thumbnail == $post -> thumbnail_fr) {
                $imageFR = $image;
            }

            if($post -> thumbnail == $post -> thumbnail_de) {
                $imageDE = $image;
            }

        }

        if(!empty($request->file('thumbnail_en'))) {
            Storage::delete('public/posts/en/' . $imageEn[0] . '-small' . $imageEn[1]);
            Storage::delete('public/posts/en/' . $imageEn[0] . '-medium' . $imageEn[1]);
            Storage::delete('public/posts/en/' . $imageEn[0] . '-large' . $imageEn[1]);
            Storage::delete('public/posts/en/' . $imageEn[0] . '-original' . $imageEn[1]);
            $imageEN = $request->file('thumbnail_en')->store('posts/en/','public');
        }

        if(!empty($request->file('thumbnail_fr'))) {

            Storage::delete('public/posts/fr/' . $imageFR[0] . '-small' . $imageFR[1]);
            Storage::delete('public/posts/fr/' . $imageFR[0] . '-medium' . $imageFR[1]);
            Storage::delete('public/posts/fr/' . $imageFR[0] . '-large' . $imageFR[1]);
            Storage::delete('public/posts/fr/' . $imageFR[0] . '-original' . $imageFR[1]);

            $imageFR = $request->file('thumbnail_fr')->store('posts/fr/','public');
        }

        if(!empty($request->file('thumbnail_de'))) {

            Storage::delete('public/posts/de/' . $imageDE[0] . '-small' . $imageDE[1]);
            Storage::delete('public/posts/de/' . $imageDE[0] . '-medium' . $imageDE[1]);
            Storage::delete('public/posts/de/' . $imageDE[0] . '-large' . $imageDE[1]);
            Storage::delete('public/posts/de/' . $imageDE[0] . '-original' . $imageDE[1]);

            $imageDE = $request->file('thumbnail_de')->store('posts/de/','public');
        }

        // End Image Upload

        // Start Update Post To Database


        $updated = $post->update([
            'title' => $request->title,
            'title_fr' => $request->title_fr,
            'title_en' => $request->title_en,
            'title_de' => $request->title_de,
            'slug' => Str::words($this->slug($request->title,'-'),5),
            'slug_en' => Str::words(Str::slug($request->title_en,'-'),5),
            'slug_fr' => Str::words(Str::slug($request->title_fr,'-'),5),
            'slug_de' => Str::words(Str::slug($request->title_de,'-'),5),
            'category_id' => $request->category_id,
            'content' => $request['content'],
            'content_fr' => $request['content_fr'],
            'content_en' => $request['content_en'],
            'content_de' => $request['content_de'],
            'is_published' => ($request->is_published) ? 1 : 0,
            'thumbnail' => $image ? $image : $post->thumbnail,
            'thumbnail_en' => $imageEN ? $imageEN : $post->thumbnail_en,
            'thumbnail_fr' => $imageFR ? $imageFR : $post->thumbnail_fr,
            'thumbnail_de' => $imageDE ? $imageDE : $post->thumbnail_de,
        ]);

        // End Update Post To Database


        if ($updated) {
            //$post -> tags()->sync($request->tags);


            return redirect()->to('dashboard/posts')->with(
                [
                    'success' =>  "Post Updated Successfully"
                ]
            );
        }

        abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {

        $image = explode('-medium',implode('',explode('posts/ar/',$post->thumbnail))) ?? "";
        $imageEn = explode('-medium',implode('',explode('posts/fr/',$post->thumbnail_fr))) ?? "";
        $imageFR = explode('-medium',implode('',explode('posts/en/',$post->thumbnail_en))) ?? "";
        $imageDE = explode('-medium',implode('',explode('posts/de/',$post->thumbnail_de))) ?? "";


        if($post->delete()) {

            if($image) {
                Storage::delete('public/posts/ar/' . $image[0] . '-small' . $image[1]);
                Storage::delete('public/posts/ar/' . $image[0] . '-medium' . $image[1]);
                Storage::delete('public/posts/ar/' . $image[0] . '-large' . $image[1]);
                Storage::delete('public/posts/ar/' . $image[0] . '-original' . $image[1]);
            }

            if($imageEn) {
                Storage::delete('public/posts/en/' . $imageEn[0] . '-small' . $imageEn[1]);
                Storage::delete('public/posts/en/' . $imageEn[0] . '-medium' . $imageEn[1]);
                Storage::delete('public/posts/en/' . $imageEn[0] . '-large' . $imageEn[1]);
                Storage::delete('public/posts/en/' . $imageEn[0] . '-original' . $imageEn[1]);
            }

            if($imageFR) {
                Storage::delete('public/posts/fr/' . $imageFR[0] . '-small' . $imageFR[1]);
                Storage::delete('public/posts/fr/' . $imageFR[0] . '-medium' . $imageFR[1]);
                Storage::delete('public/posts/fr/' . $imageFR[0] . '-large' . $imageFR[1]);
                Storage::delete('public/posts/fr/' . $imageFR[0] . '-original' . $imageFR[1]);
            }

            if($imageDE) {
                Storage::delete('public/posts/de/' . $imageDE[0] . '-small' . $imageDE[1]);
                Storage::delete('public/posts/de/' . $imageDE[0] . '-medium' . $imageDE[1]);
                Storage::delete('public/posts/de/' . $imageDE[0] . '-large' . $imageDE[1]);
                Storage::delete('public/posts/de/' . $imageDE[0] . '-original' . $imageDE[1]);
            }

            return redirect()->to('dashboard/posts')->with(
                [
                    'success' =>  "Post Deleted Successfully"
                ]
            );
        }
        abort(500);
    }

    public function resizeImage($name,$path,$file,$width = null ,$height = null)
    {

        $image = Image::read($file);

        if($width && $height) $image->resize($width, $height);

        if($image->save($path . $name)){
            return explode('storage/' , $path)[1] . $name;
        }

        return  false;

    }


}
