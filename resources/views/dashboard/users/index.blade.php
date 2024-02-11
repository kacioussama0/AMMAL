@extends('dashboard.layouts.layout')
@section('title','Users')

@section('content')

 <a href="{{route("users.create")}}" class="btn btn-primary mb-3">Create User</a>


 @if(session()->has('success'))
     <div class="alert alert-primary">
         {{session()->get('success')}}
     </div>
@endif

 @if(count($users))
<table class="table table-striped w-100">
    <thead>
        <tr>
            <td>Name</td>
            <td>Username</td>
            <td>Email</td>
            <td>Roles</td>
            <td>Created At</td>
            <td>Actions</td>
        </tr>
    </thead>

    <tbody>

        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->roles}}</td>
                <td>{{$user->created_at}}</td>
                <td class="d-flex">
                    <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary me-1">Update</a>
                    <form action="{{route('users.destroy',$user->id)}}" method="post" onsubmit="return confirm('are you sure ?')">
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
         No Users
     </div>
 @endif

@endsection
