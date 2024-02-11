@extends('dashboard.layouts.layout')
@section('title','Posts')

@section('content')

 <a href="{{route("posts.create")}}" class="btn btn-primary mb-3">Create Post</a>


 @if(session()->has('success'))
     <div class="alert alert-primary">
         {{session()->get('success')}}
     </div>
@endif

 @if(count($posts))
    <div class="table-responsive">
        <table class="table table-striped w-100 align-middle">
            <thead>
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Slug</td>
                <td>Thumbnail</td>
                <td>Title English</td>
                <td>Slug English</td>
                <td>Title French</td>
                <td>Slug French</td>
                <td>Title Deutsch</td>
                <td>Slug Deutsch</td>
                <td>Tags</td>
                <td>Created At</td>
                <td>Published</td>
                <td>Actions</td>
            </tr>
            </thead>

            <tbody>

            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->slug}}</td>
                    <td><img src="{{asset('storage/' . $post->thumbnail)}}" alt="" style="width: 80px;height: 80px"></td>
                    <td>{{$post->title_en ?? "?" }}</td>
                    <td>{{$post->slug_en ?? "?" }}</td>
                    <td>{{$post->title_fr ?? "?" }}</td>
                    <td>{{$post->slug_fr ?? "?" }}</td>
                    <td>{{$post->title_de ?? "?" }}</td>
                    <td>{{$post->slug_de ?? "?" }}</td>
                    <td>
                        <div class="row">
                            <div class="col-4">
                                @foreach($post->tags as $tag)
                                    <span class="badge bg-primary rounded-pill">{{$tag->title}}</span>
                                @endforeach
                            </div>
                        </div>
                    </td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->is_published ? "Yes" : "No"}}</td>
                    <td class="">
                        <div class="d-flex flex-nowrap">
                            <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary me-1">Update</a>
                            <form action="{{route('posts.destroy',$post->id)}}" method="post" onsubmit="return confirm('are you sure ?')">
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
         No Posts
     </div>
 @endif

@endsection
