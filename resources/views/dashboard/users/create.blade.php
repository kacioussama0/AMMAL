@extends('dashboard.layouts.layout')
@section('title','Create User')

@section('content')



    <form action="{{route('users.store')}}" method="POST">

        @csrf

        <div class="card">

            <div class="card-body">

                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="{{old('name')}}">
                    <label for="email">Name</label>
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="form-floating mb-3">
                    <input type="text" name="username" class="form-control" id="username" placeholder="name@example.com" value="{{old('username')}}">
                    <label for="username">Username</label>
                    @error('username')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" value="{{old('email')}}">
                    <label for="email">Email address</label>
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="password" class="form-label">Show/Hide Password</label>
                    <div class="input-group input-group-merge">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" value="{{old('password')}}">
                        <div class="input-group-text" data-password="false">
                            <span class="password-eye"></span>
                        </div>
                    </div>
                    @error('password')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="form-floating mb-3">
                    <select class="form-select" name="roles" id="roles" aria-label="roles">
                        <option value="" disabled selected>Selected An Role</option>
                        <option value="super_admin">Super Admin</option>
                        <option value="admin">Admin</option>
                        <option value="editor">Editor</option>
                        <option value="contributor">Contributor</option>
                    </select>
                    <label for="roles">Roles</label>
                    @error('roles')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <input type="submit" value="Create" class="btn btn-primary w-100 py-2">

            </div> <!-- end card-body-->
        </div>

    </form>

@endsection
