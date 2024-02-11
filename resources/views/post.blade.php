@extends('layouts.app')

@section('content')

    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb" style="background-image: url('{{asset('storage/'. $post->thumbnail)}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">{{$post->title}}</h4>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- Blog Section Start Here -->
    <div class="blog-section blog-page padding-tb aside-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="row justify-content-center pb-15">
                    <div class="col-lg-8 col-12">
                        <article>
                            <div class="post-item-2">
                                <div class="post-inner">
                                    <div class="post-content">
                                        {!! $post->content !!}
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-7 col-12">
                        <aside class="ps-lg-4">
                            <div class="widget widget-search">
                                <div class="widget-header">
                                    <h5>البحث</h5>
                                </div>
                                <form action="/" class="search-wrapper">
                                    <input type="text" name="s" placeholder="إبحث هنا">
                                    <button type="submit"><i class="icofont-search-2"></i></button>
                                </form>
                            </div>

                            <div class="widget widget-category">
                                <div class="widget-header">
                                    <h5>التصنيفات</h5>
                                </div>
                                <ul class="lab-ul widget-wrapper list-bg-none">
                                    @foreach($categories as $category)
                                        <li>
                                            <a href="{{url('category/' . $category->slug)}}" class="d-flex flex-wrap justify-content-between"><span><i
                                                        class="icofont-rounded-double-right"></i>{{$category->title}}
												</span><span>{{count($category->posts)}}</span></a>
                                        </li>
                                @endforeach

                            </div>


                            <div class="widget widget-tags">
                                <div class="widget-header">
                                    <h5>الوسوم</h5>
                                </div>
                                <ul class="lab-ul widget-wrapper">
                                    @foreach($tags as $tag)
                                        <li><a href="{{url('tag/' . $tag->title)}}">{{$tag->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section ENding Here -->


@endsection
