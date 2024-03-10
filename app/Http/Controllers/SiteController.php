<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SiteController extends Controller
{
   public function home($lang)
   {
       App::setLocale($lang);

       $categories = Category::where('published',1)->get();

       $slider_posts = Post::where('is_published',1)->latest()->take(5)->get();
       $latestPosts = Post::where('is_published',1)->latest()->take(6)->get();
       return view('index',compact('slider_posts','latestPosts','categories'));
   }

   public function about($lang)
   {
       App::setLocale($lang);
       return view('about');
   }

   public function category($lang,$slug)
   {

       App::setLocale($lang);
       $category = Category::where('slug','=',$slug)->first();


       if(empty($category)) abort(404);

       $categories = Category::where('published',1)->latest()->get();
       $tags = Tag::where('is_published',1)->latest()->get();
       $posts = Post::where('category_id','=',$category->id)->paginate(10);

       return view('category',compact('category','categories','tags','posts'));

   }

   public function post($lang,$slug)
   {
       App::setLocale($lang);
       $categories = Category::where('published',1)->latest()->get();
       $tags = Tag::where('is_published',1)->latest()->get();

       $post = Post::where('slug',$slug)->first();

       return view('post',compact('categories','tags','post'));
   }

}
