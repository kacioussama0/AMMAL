<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $tags = Tag::all();
       return view('dashboard.tags.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|min:3|max:40|unique:tags',
            'title_en' => 'required|min:3|max:40|unique:tags',
            'title_fr' => 'required|min:3|max:40|unique:tags',
            'title_de' => 'required|min:3|max:40|unique:tags',
        ]);

        $data['slug'] = Str::slug($data['title'],'-','ar');
        $data['slug_en'] = Str::slug($data['title_en']);
        $data['slug_fr'] = Str::slug($data['title_fr'],'-','fr');
        $data['slug_de'] = Str::slug($data['title_de'],'-','de');

        $data['is_published'] = $request->is_published ? 1 : 0;

        $createdTag = Tag::create($data);

        if($createdTag) {
            return redirect()->to('dashboard/tags')->with('success','Tag Created Successfully');
        }

        abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('dashboard.tags.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $data = $request->validate([
            'title' => 'required|min:3|max:40|unique:tags,title,' . $tag->id,
            'title_en' => 'required|min:3|max:40|unique:tags,title_en,' . $tag->id,
            'title_fr' => 'required|min:3|max:40|unique:tags,title_fr,' . $tag->id,
            'title_de' => 'required|min:3|max:40|unique:tags,title_de,' . $tag->id
        ]);

        $data['slug'] = Str::slug($data['title'],'-','ar');
        $data['slug_en'] = Str::slug($data['title_en']);
        $data['slug_fr'] = Str::slug($data['title_fr'],'-','fr');
        $data['slug_de'] = Str::slug($data['title_de'],'-','de');

        $data['is_published'] = $request->is_published ? 1 : 0;

        $updatedTag = $tag->update($data);

        if($updatedTag) {
            return redirect()->to('dashboard/tags')->with('success','Tag Updated Successfully');
        }

        abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        if($tag->delete()) {
            return redirect()->to('dashboard/tags')->with('success','Tag Deleted Successfully');
        }

        abort(500);
    }



}
