@extends('dashboard.layouts.layout')
@section('title','Edit Post')

@section('css')
    <link href="{{asset('assets_dashboard/vendor/quill/quill.core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets_dashboard/vendor/quill/quill.snow.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets_dashboard/vendor/quill/quill.bubble.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets_dashboard/vendor/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css">
@endsection


@section('content')

    <form action="{{route('posts.update',$post->id)}}" method="POST" enctype="multipart/form-data">

        @csrf

        @method('PUT')

        <div class="card">

            <div class="card-body">

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="title" class="form-control" id="title" placeholder="Your Title" value="{{$post->title}}">
                            <label for="title">Title <span class="text-danger">*</span></label>
                            @error('title')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="form-floating mb-3">
                            <input type="text" name="slug" class="form-control" id="slug" placeholder="Your Slug" value="{{$post->slug}}">
                            <label for="slug">Slug</label>
                            @error('slug')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="categories" class="form-label">Categories <span class="text-danger">*</span></label>
                            <select class="form-select"  id="categories" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" @selected($post->category_id == $category->id)>{{$category->title}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-12 mb-3" data-select2-id="select2-data-73-jn69">

                        <p class="mb-1 fw-bold text-muted">Tags</p>

                        <select class="select2 form-control select2-multiple select2-hidden-accessible" name="tags[]" data-toggle="select2" multiple="" data-placeholder="Choose ..." data-select2-id="select2-data-4-d64p" tabindex="-1" aria-hidden="true">
                            @foreach($tags as $key => $tag)
                                <option value="{{$tag->id}}" @selected(in_array($tag->id,$selectedTags))>{{$tag->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-12">

                        <div class="mb-3">

                            <div class="mb-3">
                                <img src="{{asset('storage/' . $post->thumbnail)}}" alt="" width="100" height="100">
                            </div>

                            <label for="thumbnail" class="form-label">Thumbnail <span class="text-danger">*</span></label>
                            <input type="file" name="thumbnail" id="thumbnaill"  class="form-control" placeholder="Email">
                            @error('thumbnail')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
                        <textarea id="content" name="content">{!! $post->content !!}</textarea>
                        @error('content')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>


                    <div class="col-md-6  mt-3">
                        <div class="form-floating mb-3">
                            <input type="text" name="title_en" class="form-control" id="title_en" placeholder="Your Title" value="{!! $post->title_en !!}">
                            <label for="title_en">Title English</label>
                            @error('title_en')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6  mt-3">
                        <div class="form-floating mb-3">
                            <input type="text" name="slug_en" class="form-control" id="slug_en" placeholder="Your Slug" value="{{$post->slug_en}}">
                            <label for="slug_en">Slug English</label>
                            @error('slug_en')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="mb-3">
                            <img src="{{asset('storage/' . $post->thumbnail_en)}}" alt="" width="100" height="100">
                        </div>
                        <div class="my-3">
                            <label for="thumbnail" class="form-label">Thumbnail English</label>
                            <input type="file" name="thumbnail_en" id="thumbnail_en"  class="form-control" placeholder="file">
                            @error('thumbnail_en')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="content_en" class="form-label">Content English <span class="text-danger">*</span></label>
                        <textarea id="content_en" name="content_en">{!! $post->content_en !!}</textarea>
                        @error('content_en')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>


                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="title_fr" class="form-control" id="title_fr" placeholder="Your Title" value="{{$post->title_fr}}">
                            <label for="title_fr">Title French</label>
                            @error('title_fr')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="slug_fr" class="form-control" id="slug_fr" placeholder="Your Slug" value="{{$post->slug_fr}}">
                            <label for="slug_fr">Slug French</label>
                            @error('slug_fr')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">

                        <div class="mb-3">
                            <img src="{{asset('storage/' . $post->thumbnail_fr)}}" alt="" width="100" height="100">
                        </div>

                        <div class="my-3">
                            <label for="thumbnail_fr" class="form-label">Thumbnail French</label>
                            <input type="file" name="thumbnail_fr" id="thumbnail_fr"  class="form-control" placeholder="file">
                            @error('thumbnail_fr')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="content_fr" class="form-label">Content French <span class="text-danger">*</span></label>
                        <textarea id="content_fr" name="content_fr">{!! $post->content_fr !!}</textarea>
                        @error('content_fr')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="title_de" class="form-control" id="title_de" placeholder="Your Title" value="{{$post->title_de}}">
                            <label for="title_de">Title Deutsche</label>
                            @error('title_de')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="slug_de" class="form-control" id="slug_de" placeholder="Your Slug" value="{{$post->slug_de}}">
                            <label for="slug_de">Slug Deutsche</label>
                            @error('slug_de')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="mb-3">
                            <img src="{{asset('storage/' . $post->thumbnail_de)}}" alt="" width="100" height="100">
                        </div>]

                        <div class="my-3">
                            <label for="thumbnail_de" class="form-label">Thumbnail Deutsche</label>
                            <input type="file" name="thumbnail_de" id="thumbnail_de"  class="form-control" placeholder="file">
                            @error('thumbnail_de')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="content_de" class="form-label">Content Deutsche <span class="text-danger">*</span></label>
                        <textarea id="content_de" name="content_de">{!! $post->content_de !!}</textarea>
                        @error('content_de')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-md-6 my-3">
                        <div class="form-check form-switch">
                            <input type="checkbox" name="is_published" class="form-check-input" id="is_published" value="1" @checked($post->is_published)>
                            <label class="form-check-label" for="is_published">Published</label>
                        </div>
                    </div>
                </div>

                <input type="submit" value="Edit" class="btn btn-primary w-100 py-2">

            </div> <!-- end card-body-->
        </div>

    </form>

@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
    <script>



        ClassicEditor
            .create( document.querySelector( '#content' ) , {
                language: {
                    content: 'ar'
                }
            })
            .catch( error => {
                console.error( error );
            } );


        ClassicEditor
            .create( document.querySelector( '#content_fr' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#content_en' ) )
            .catch( error => {
                console.error( error );
            } );


        ClassicEditor
            .create( document.querySelector( '#content_de' ) )
            .catch( error => {
                console.error( error );
            } );

    </script>

    <script src="{{asset('assets_dashboard/vendor/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('assets_dashboard/js/app.min.js')}}"></script>

@endsection
