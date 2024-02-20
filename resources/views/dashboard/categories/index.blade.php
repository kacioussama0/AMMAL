@extends('dashboard.layouts.layout')
@section('title','Categories')

@section('content')

 <a href="{{route("categories.create")}}" class="btn btn-primary mb-3">Create Category</a>


 @if(session()->has('success'))
     <div class="alert alert-primary">
         {{session()->get('success')}}
     </div>
@endif


 @if(session()->has('failed'))
     <div class="alert alert-danger">
         {{session()->get('failed')}}
     </div>
 @endif

 @if(count($categories))
    <div class="table-responsive">
        <table class="table table-striped w-100">
            <thead>
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Title English</td>
                <td>Title French</td>
                <td>Title Deutsch</td>
                <td>Slug</td>
                <td>Slug English</td>
                <td>Slug French</td>
                <td>Slug Deutsch</td>
                <td>Posts</td>
                <td>Published</td>
                <td>Created At</td>
                <td>Updated At</td>
                <td>Actions</td>
            </tr>
            </thead>

            <tbody class="align-middle">

            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{$category->title_en}}</td>
                    <td>{{$category->title_fr}}</td>
                    <td>{{$category->title_de}}</td>
                    <td>{{$category->slug}}</td>
                    <td>{{$category->slug_en}}</td>
                    <td>{{$category->slug_fr}}</td>
                    <td>{{$category->slug_de}}</td>
                    <td > <span class="badge text-bg-success">{{$category->posts->count()}} Post</span></td>
                    <td>{{$category->published ? "Yes" : "No"}}</td>
                    <td>{{$category->created_at}}</td>
                    <td>{{$category->updated_at}}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{route('categories.show',$category->id)}}" class="btn btn-warning me-1">Show</a>
                            <a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary me-1">Update</a>
                            <form action="{{route('categories.destroy',$category->id)}}" method="post" onsubmit="return confirm('are you sure ?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>

        </table>
    </div>
 @else
     <div class="alert alert-warning">
         No Categories
     </div>
 @endif

@endsection
