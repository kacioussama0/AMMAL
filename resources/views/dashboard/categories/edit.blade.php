@extends('dashboard.layouts.layout')
@section('title','Update Category')

@section('content')

    <form action="{{route('categories.update',$category->id)}}" method="POST">

        @csrf
        @method("PUT")

        <div class="card">

            <div class="card-body">

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="title" class="form-control" id="title" placeholder="Your Title" value="{{$category->title}}">
                            <label for="title">Title <span class="text-danger">*</span></label>
                            @error('title')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="slug" class="form-control" id="slug" placeholder="Your Slug" value="{{$category->slug}}">
                            <label for="slug">Slug</label>
                            @error('slug')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="title_en" class="form-control" id="title_en" placeholder="Your Title" value="{{$category->title_en}}">
                            <label for="title_en">Title English <span class="text-danger">*</span></label>
                            @error('title_en')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="slug_en" class="form-control" id="slug_en" placeholder="Your Slug" value="{{$category->slug_en}}">
                            <label for="slug_en">Slug English</label>
                            @error('slug_en')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="title_fr" class="form-control" id="title_fr" placeholder="Your Title" value="{{$category->title_fr}}">
                            <label for="title_fr">Title French <span class="text-danger">*</span></label>
                            @error('title_fr')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="slug_fr" class="form-control" id="slug_fr" placeholder="Your Slug" value="{{$category->slug_fr}}">
                            <label for="slug_fr">Slug French</label>
                            @error('slug_fr')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="title_de" class="form-control" id="title_de" placeholder="Your Title" value="{{$category->title_de}}">
                            <label for="title_de">Title Deutsche <span class="text-danger">*</span></label>
                            @error('title_de')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="slug_de" class="form-control" id="slug_de" placeholder="Your Slug" value="{{$category->slug_de}}">
                            <label for="slug_de">Slug Deutsche</label>
                            @error('slug_de')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="form-check form-switch">
                            <input type="checkbox" name="published" class="form-check-input" id="published" @checked($category->published)>
                            <label class="form-check-label" for="published">Published</label>
                        </div>
                    </div>





                <input type="submit" value="Update" class="btn btn-primary w-100 py-2">

            </div> <!-- end card-body-->
        </div>

    </form>

@endsection
