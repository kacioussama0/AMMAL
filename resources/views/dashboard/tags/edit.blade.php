@extends('dashboard.layouts.layout')
@section('title','Update Tag')

@section('content')


    <form action="{{route('tags.update',$tag->id)}}" method="POST">

        @csrf
        @method('PUT')

        <div class="card">

            <div class="card-body">

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="title" class="form-control" id="title" placeholder="Your Title" value="{{$tag->title}}">
                            <label for="title">Title <span class="text-danger">*</span></label>
                            @error('title')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                    </div>




                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="title_en" class="form-control" id="title_en" placeholder="Your Title" value="{{$tag->title_en}}">
                            <label for="title_en">Title English <span class="text-danger">*</span></label>
                            @error('title_en')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="title_fr" class="form-control" id="title_fr" placeholder="Your Title" value="{{$tag->title_fr}}">
                            <label for="title_fr">Title French <span class="text-danger">*</span></label>
                            @error('title_fr')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="title_de" class="form-control" id="title_de" placeholder="Your Title" value="{{$tag->title_de}}">
                            <label for="title_de">Title Deutsche <span class="text-danger">*</span></label>
                            @error('title_de')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="form-check form-switch">
                            <input type="checkbox" name="is_published" class="form-check-input" id="published" @checked($tag->is_published)>
                            <label class="form-check-label" for="published">Published</label>
                        </div>
                    </div>

                </div>

                <input type="submit" value="Update" class="btn btn-primary w-100 py-2">

            </div> <!-- end card-body-->
        </div>

    </form>

@endsection
