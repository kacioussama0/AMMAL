@extends('layouts.app')

@section('title',__("Home"))

@section('content')


@if(count($slider_posts))
<!-- Slider Section  start here -->
<section class="container">
        <div class="w-100">
            <div id="LastPosts" class="carousel slide overflow-hidden position-relative shadow " data-bs-ride="carousel">

                <div class="carousel-inner">

                        @foreach($slider_posts as  $key => $post)
                            @php $active = $key @endphp
                            @break
                        @endforeach

                    @foreach($slider_posts as  $key => $post)

                        <div class="carousel-item @if($key == $active) active @endif">
                            <div class="carousel-content mb-4">
                                <div class="mb-3">{{$post ->created_at -> diffForHumans()}}</div>
                                <a href="{{url('ar/category/' .  $post->category->title)}}" class="link-dark badge bg-light">{{$post -> category -> title()}}</a>
                                <h4 class="lh-lg"><a href="{{url('ar/post/' .  $post->slug())}}" class="link-light ">{{$post->title()}}</a></h4>

                            </div>
                            <img src="{{asset('storage/' . $post -> thumbnail())}}" class="d-block w-100 " alt="...">
                        </div>
                    @endforeach
                </div>

                <div class="carousel-indicators end-0 m-0 w-auto mb-2">
                    @foreach($slider_posts as  $key => $post)
                            @php $active = $key @endphp
                            @break
                    @endforeach

                    @foreach($slider_posts as  $key => $post)
                            <button type="button" data-bs-target="#LastPosts" data-bs-slide-to="{{$key}}" class="@if($key == 0) active @endif rounded-circle" aria-current="true" aria-label="Slide {{$key}}" style="width: 10px;height: 10px"></button>
                    @endforeach

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#LastPosts" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#LastPosts" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
</section>
<!-- Slider Section end here -->
@endif



@if(count($latestPosts))
<!-- Posts Section start here -->
<section class="event-section  padding-b shape-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-title">
                    <h2 class=" my-5">أخر المقالات</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="event-content">

                    <div class="event-bottom">
                        <div class="row  gy-5">
                            @foreach($latestPosts as  $key => $post)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="event-item lab-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <img src="{{asset('storage/' . $post->thumbnail())}}" alt="event-image" style="height: 250px;object-fit: cover">
                                            </div>
                                            <div class="lab-content py-3">
                                                <h5 class="fs-6"><a href="{{url('ar/post/' .  $post->slug())}}" class="text-truncate">{{$post->title()}}</a> </h5>
                                                <ul class="lab-ul event-date">
                                                    <li><i class="icofont-calendar"></i> <span>{{date_format($post->created_at,'d-m-Y')}}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Posts Section end here -->
@endif


<!-- Program section start Here -->

<div class="categories">

        <div class="upcoming-programs mb-5">
        <div class="container">

                    <div class="programs-item-part">
                        <div class="program-desc d-flex justify-content-between mb-2">
                            <h2>التصنيفات</h2>
                            <ul class="lab-ul">
                                <li><a href="#" class="program-next bg-transparent text-dark border border-black"><i class="icofont-arrow-right"></i></a></li>
                                <li><a href="#" class="program-prev bg-transparent text-dark border border-black"><i class="icofont-arrow-left"></i></a></li>
                            </ul>
                        </div>
                        <div class="program-item-container">
                            <div class="program-item-container">
                                <div class="program-item-wrapper">
                                    <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="program-item">
                                                    <div class="lab-inner">
                                                        <div class="lab-thumb">
                                                            <a href="#">
                                                                <img src="{{asset('storage/' . $post->thumbnail())}}" alt="event-image" style="height: 250px;object-fit: cover">
                                                            </a>
                                                        </div>
                                                        <div class="p-3">
                                                            <i class="icofont-calendar"></i>
                                                            <span>{{date_format($post->created_at,'d-m-Y')}}</span>
                                                            <h5 class="mt-3"><a href="#">ملاء السماؤ</a> </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Program section end Here -->
</div>

@endsection
