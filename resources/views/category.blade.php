@extends('layouts.app')

@section('content')

    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">{{$category->title}}</h4>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- Blog Section Start Here -->
    <div class="blog-section blog-page padding-tb aside-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-12">
                        <article>

                            @foreach($category->posts as $post)
                                <div class="post-item-2">
                                    <div class="post-inner">
                                        <div class="post-thumb">
                                            <a href="blog-single.html">
                                                <img src="{{asset('storage/' . $post->thumbnail)}}" alt="blog" style="height: 400px;object-fit: cover">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <a href="blog-single.html">
                                                <h3>{{$post->title}}</h3>
                                            </a>
                                            <ul class="lab-ul post-date">
                                                <li><span><i class="icofont-ui-calendar"></i> {{date_format($post->created_at,'d-m-Y')}}
												</span></li>
                                                </li>
                                            </ul>
                                            <p>It’s no secret that the digital industry is booming. from exciting startups
                                                to global brands, to the new companies are reachin boomingesagencies,
                                                responding to the new psblites available. however, the industry is
                                                exciting fast becoming overcr.</p>
                                            <a href="#" class="lab-btn">قراءة المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                            <div class="paginations">
                                <ul class="lab-ul d-flex flex-wrap justify-content-center mb-1">
                                    <li>
                                        <a href="#"><i class="icofont-rounded-double-right"></i></a>
                                    </li>
                                    <li>
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li class="d-none d-sm-block">
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-rounded-double-left"></i></a>
                                    </li>
                                </ul>
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
                                    <input type="text" name="s" placeholder="Search Here...">
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
