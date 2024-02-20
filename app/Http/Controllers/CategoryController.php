<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('dashboard.categories.index',compact('categories'));
    }

    public function create()
    {
        return view('dashboard.categories.create');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:128|unique:categories',
            'title_en' => 'required|max:128|unique:categories',
            'title_fr' => 'required|max:128|unique:categories',
            'title_de' => 'required|max:128|unique:categories',
            'slug' => 'max:128|unique:categories',
            'slug_en' => 'max:128|unique:categories',
            'slug_fr' => 'max:128|unique:categories',
            'slug_de' => 'max:128|unique:categories'
        ]);

        $data['published'] = $request->published ? 1 : 0;
        $data['slug'] = $data['slug'] ?? Str::slug($data['title'],'-','ar');
        $data['slug_en'] = $data['slug_en'] ?? Str::slug($data['title_en']);
        $data['slug_fr'] = $data['slug_fr'] ?? Str::slug($data['title_fr'],'-','fr');
        $data['slug_de'] = $data['slug_de'] ?? Str::slug($data['title_de'],'-','de');

        $createdCategory = Category::create($data);

        if($createdCategory) {
            return redirect()->to('dashboard/categories')->with('success','Category Created Successfully');
        }

        abort(500);
    }


    public function show(Category $category)
    {
        $categories = Category::where('published',1);
        $tags = Tag::where('published',1);
        return view('category',compact('category','categories','tags'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('dashboard.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'title' => 'required|min:3|max:40|unique:categories,title,'. $category->id,
            'title_en' => 'required|max:50|unique:categories,title_en,'. $category->id,
            'title_fr' => 'required|max:50|unique:categories,title_fr,'. $category->id,
            'title_de' => 'required|max:50|unique:categories,title_de,'. $category->id,
            'slug' => 'max:128|unique:categories,slug,'. $category->id,
            'slug_en' => 'max:128|unique:categories,slug_en,'. $category->id,
            'slug_fr' => 'max:128|unique:categories,slug_fr,'. $category->id,
            'slug_de' => 'max:128|unique:categories,slug_de,'. $category->id
        ]);


        $data['slug'] = $data['slug'] ?? Str::slug($data['title'],'-','ar');
        $data['slug_en'] = $data['slug_en'] ?? Str::slug($data['title_en']);
        $data['slug_fr'] = $data['slug_fr'] ?? Str::slug($data['title_fr'],'-','fr');
        $data['slug_de'] = $data['slug_de'] ?? Str::slug($data['title_de'],'-','de');
        $data['published'] = $request->published ? 1 : 0;

        $updatedCategory = $category->update($data);

        if($updatedCategory) {
            return redirect()->to('dashboard/categories')->with('success','Category Updated Successfully');
        }

        abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {

        if(count($category->posts)) {
            return redirect()->to('dashboard/categories')->with('failed','You Can\'t Delete Category It Has A Posts.');
        }

        if($category->delete()) {
            return redirect()->to('dashboard/categories')->with('success','Category Deleted Successfully');
        }

        abort(500);
    }
}
