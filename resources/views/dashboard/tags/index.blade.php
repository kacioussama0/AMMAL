@extends('dashboard.layouts.layout')
@section('title','Tags')

@section('content')

 <a href="{{route("tags.create")}}" class="btn btn-primary mb-3">Create Tag</a>


 @if(session()->has('success'))
     <div class="alert alert-primary">
         {{session()->get('success')}}
     </div>
@endif

 @if(count($tags))
<table class="table table-striped w-100">
    <thead>
        <tr>
            <td>Title</td>
            <td>Title English</td>
            <td>Title French</td>
            <td>Title Deutsch</td>
            <td>Created</td>
            <td>Actions</td>
        </tr>
    </thead>

    <tbody>

        @foreach($tags as $tag)
            <tr>
                <td>{{$tag->title ?? '?'}}</td>
                <td>{{$tag->title_en ?? '?'}}</td>
                <td>{{$tag->title_fr ?? '?'}}</td>
                <td>{{$tag->title_de ?? '?'}}</td>
                <td>{{$tag->created_at ?? '?'}}</td>
                <td class="d-flex">
                    <a href="{{route('tags.edit',$tag->id)}}" class="btn btn-primary me-1">Update</a>
                    <form action="{{route('tags.destroy',$tag->id)}}" method="post" onsubmit="return confirm('are you sure ?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
       @endforeach

    </tbody>

</table>
 @else
     <div class="alert alert-warning">
         No Tags
     </div>
 @endif

@endsection
