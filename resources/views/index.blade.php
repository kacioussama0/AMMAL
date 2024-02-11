@extends('layouts.app')

@section('title','الرئيسية')

@section('content')


@if(count($slider_posts))
<!-- Slider Section  start here -->
<section >
        <div class="container">
            <div id="LastPosts" class="carousel slide overflow-hidden position-relative shadow mb-5" data-bs-ride="carousel">

                <div class="carousel-inner ">

                        @foreach($slider_posts as  $key => $post)
                            @php $active = $key @endphp
                            @break
                        @endforeach

                    @foreach($slider_posts as  $key => $post)

                        <div class="carousel-item @if($key == $active) active @endif">
                            <div class="carousel-content mb-4">
                                <div class="mb-3">{{$post ->created_at -> diffForHumans()}}</div>
                                <a href="{{url('ar/category/' .  $post->category->title)}}" class="link-dark badge bg-light">{{$post -> category -> title}}</a>
                                <h4 class="lh-lg"><a href="{{url('ar/post/' .  $post->slug)}}" class="link-light ">{{$post->title}}</a></h4>

                            </div>
                            <img src="{{asset('storage/' . $post -> thumbnail)}}" class="d-block w-100 " alt="...">
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
                    <h2 class=" mb-5">أخر المقالات</h2>
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
                                                <img src="{{asset('storage/' . $post->thumbnail)}}" alt="event-image" style="height: 250px;object-fit: cover">
                                            </div>
                                            <div class="lab-content">
                                                <h5><a href="{{url('ar/post/' .  $post->slug)}}" class="text-truncate">{{$post->title}}</a> </h5>
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

{{--<!-- Faith section start here -->--}}
{{--<section class="faith-section padding-tb shape-3">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="header-title">--}}
{{--                    <h5>The Pillars of Islam</h5>--}}
{{--                    <h2>Ethical And Moral Beliefs That Guides--}}
{{--                        To The Straight Path!</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-12">--}}
{{--                <div class="faith-content">--}}
{{--                    <div class="tab-content" id="pills-tabContent">--}}
{{--                        <div class="tab-pane fade show active" id="shahadah" role="tabpanel"--}}
{{--                             aria-labelledby="sahadah-tab">--}}
{{--                            <div class="lab-item faith-item tri-shape-1 pattern-2">--}}
{{--                                <div class="lab-inner d-flex align-items-center">--}}
{{--                                    <div class="lab-thumb">--}}
{{--                                        <img src="assets/images/faith/01.png" alt="faith-image">--}}
{{--                                    </div>--}}
{{--                                    <div class="lab-content">--}}
{{--                                        <h4>Shahadah <span>(Faith)</span> </h4>--}}
{{--                                        <p>The Shahadah, is an Islamic creed, one of the Five Pillars of Islam and--}}
{{--                                            part of the Adhan. It reads: "I bear witness that there is no deity but--}}
{{--                                            God, and I bear witness that Muhammad is the messenger of God."</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane fade" id="prayer" role="tabpanel" aria-labelledby="salah-tab">--}}
{{--                            <div class="lab-item faith-item tri-shape-1 pattern-2">--}}
{{--                                <div class="lab-inner d-flex align-items-center">--}}
{{--                                    <div class="lab-thumb">--}}
{{--                                        <img src="assets/images/faith/02.png" alt="faith-image">--}}
{{--                                    </div>--}}
{{--                                    <div class="lab-content">--}}
{{--                                        <h4>Salaah <span>(Prayer)</span> </h4>--}}
{{--                                        <p>Each Muslim should pray five times a day: in the morning, at noon, in--}}
{{--                                            the afternoon, after sunset, and early at night. These prayers can be--}}
{{--                                            said anywhere, prayers that are said in company of others are better--}}
{{--                                            than those said alone.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane fade" id="ramadan" role="tabpanel" aria-labelledby="sawm-tab">--}}
{{--                            <div class="lab-item faith-item tri-shape-1 pattern-2">--}}
{{--                                <div class="lab-inner d-flex align-items-center">--}}
{{--                                    <div class="lab-thumb">--}}
{{--                                        <img src="assets/images/faith/03.png" alt="faith-image">--}}
{{--                                    </div>--}}
{{--                                    <div class="lab-content">--}}
{{--                                        <h4>Sawm <span>(Fasting)</span> </h4>--}}
{{--                                        <p>Each Muslim should pray five times a day: in the morning, at noon, in--}}
{{--                                            the afternoon, after sunset, and early at night. These prayers can be--}}
{{--                                            said anywhere, prayers that are said in company of others are better--}}
{{--                                            than those said alone.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane fade" id="jakat" role="tabpanel" aria-labelledby="zakat-tab">--}}
{{--                            <div class="lab-item faith-item tri-shape-1 pattern-2">--}}
{{--                                <div class="lab-inner d-flex align-items-center">--}}
{{--                                    <div class="lab-thumb">--}}
{{--                                        <img src="assets/images/faith/04.png" alt="faith-image">--}}
{{--                                    </div>--}}
{{--                                    <div class="lab-content">--}}
{{--                                        <h4>Zakat <span>(Almsgiving)</span> </h4>--}}
{{--                                        <p>Each Muslim should pray five times a day: in the morning, at noon, in--}}
{{--                                            the afternoon, after sunset, and early at night. These prayers can be--}}
{{--                                            said anywhere, prayers that are said in company of others are better--}}
{{--                                            than those said alone.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane fade" id="hajj" role="tabpanel" aria-labelledby="hajj-tab">--}}
{{--                            <div class="lab-item faith-item tri-shape-1 pattern-2">--}}
{{--                                <div class="lab-inner d-flex align-items-center">--}}
{{--                                    <div class="lab-thumb">--}}
{{--                                        <img src="assets/images/faith/05.png" alt="faith-image">--}}
{{--                                    </div>--}}
{{--                                    <div class="lab-content">--}}
{{--                                        <h4>Hajj <span>(Pilgrimage)</span> </h4>--}}
{{--                                        <p>Each Muslim should pray five times a day: in the morning, at noon, in--}}
{{--                                            the afternoon, after sunset, and early at night. These prayers can be--}}
{{--                                            said anywhere, prayers that are said in company of others are better--}}
{{--                                            than those said alone.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <ul class="nav nav-pills mb-3 align-items-center justify-content-center" id="pills-tab"--}}
{{--                        role="tablist">--}}
{{--                        <li class="nav-item" role="presentation">--}}
{{--                            <a class="nav-link active" id="sahadah-tab" data-bs-toggle="pill" href="#shahadah"--}}
{{--                               role="tab" aria-controls="sahadah-tab" aria-selected="true">--}}
{{--                                <img src="assets/images/faith/faith-icons/01.png" alt="faith-icon">--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item" role="presentation">--}}
{{--                            <a class="nav-link" id="salah-tab" data-bs-toggle="pill" href="#prayer" role="tab"--}}
{{--                               aria-controls="salah-tab" aria-selected="false">--}}
{{--                                <img src="assets/images/faith/faith-icons/02.png" alt="faith-icon">--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item" role="presentation">--}}
{{--                            <a class="nav-link" id="sawm-tab" data-bs-toggle="pill" href="#ramadan" role="tab"--}}
{{--                               aria-controls="sawm-tab" aria-selected="false">--}}
{{--                                <img src="assets/images/faith/faith-icons/03.png" alt="faith-icon">--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item" role="presentation">--}}
{{--                            <a class="nav-link" id="zakat-tab" data-bs-toggle="pill" href="#jakat" role="tab"--}}
{{--                               aria-controls="zakat-tab" aria-selected="false">--}}
{{--                                <img src="assets/images/faith/faith-icons/04.png" alt="faith-icon">--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item" role="presentation">--}}
{{--                            <a class="nav-link" id="hajj-tab" data-bs-toggle="pill" href="#hajj" role="tab"--}}
{{--                               aria-controls="hajj-tab" aria-selected="false">--}}
{{--                                <img src="assets/images/faith/faith-icons/05.png" alt="faith-icon">--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- Faith section end here -->--}}




@endsection
