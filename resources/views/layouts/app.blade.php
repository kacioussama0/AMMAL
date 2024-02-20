@php
    $categories = \App\Models\Category::where('published',1)->get();

@endphp
<!DOCTYPE html>
<html lang="{{\Illuminate\Support\Facades\App::currentLocale()}}" dir="{{\Illuminate\Support\Facades\App::currentLocale() == 'ar' ? 'rtl' : 'ltr'}}">

<head>
    <title>{{__("Title") . ' | '}} @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicons/site.webmanifest')}}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap{{(\Illuminate\Support\Facades\App::currentLocale() == 'ar' ? '.rtl' : '')}}.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min'. (\Illuminate\Support\Facades\App::currentLocale() == 'ar' ? '.rtl' : '') . '.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style' . (\Illuminate\Support\Facades\App::currentLocale() == 'ar' ? '.rtl' : '') .  '.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
</head>

<body>


<!-- Start Search Modal -->

<div class="modal fade" id="search" tabindex="-1" aria-labelledby="search" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header ">
                <h1 class="modal-title fs-5" id="search">{{__('home.search')}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="GET" class="d-flex" role="search">

                    <input class="form-control me-2" name="result" type="search" placeholder="" aria-label="Search">
                    <button class="lab-btn btn-sm" type="submit">{{__('home.search')}}</button>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- End Search Modal -->


<!-- preloader start here -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- preloader ending here -->



<!-- Header Section Starts Here -->
<header class="header-3 pattern-1 shadow">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-3 col-12">
                <div class="mobile-menu-wrapper d-flex flex-wrap align-items-center justify-content-between justify-content-lg-center">
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="logo my-2">
                        <a href="{{url('/') . config('app.locale')}}">
                            @if(config('app.locale') == 'ar')
                                <img src="{{asset('assets/images/logo/logo-arabic.svg')}}" alt="logo" style="width: 100px">
                            @elseif(config('app.locale') == 'fr')
                                <img src="{{asset('assets/images/logo/logo-french.svg')}}" alt="logo" style="width: 100px">
                            @else
                                <img src="{{asset('assets/images/logo/logo-english.svg')}}" alt="logo" style="width: 100px">
                            @endif
                        </a>
                    </div>
                    <div class="ellepsis-bar d-lg-none">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-12">
{{--                <div class="header-top">--}}
{{--                    <div class="header-top-area">--}}
{{--                        <ul class="left lab-ul">--}}
{{--                            <li>--}}
{{--                                <i class="icofont-ui-call"></i> <span>+33 23 339 702 520</span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fas fa-map-marker-alt"></i> Place du Puits de l’Ermite, 75005 Paris--}}

{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <ul class="social-icons lab-ul d-flex">--}}

{{--                            <li>--}}
{{--                                <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="#"><i class="fab fa-youtube"></i></a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <a href="#"><i class="fab fa-instagram"></i></a>--}}
{{--                            </li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="header-bottom mb-0">
                    <div class="header-wrapper">
                        <div class="menu-area justify-content-between w-100">
                            <ul class="menu lab-ul">
                                <li>
                                    <a href="{{'/' . config('app.locale')}}">{{__('Home')}}</a>
                                </li>

                                <li>
                                    <a href="#">{{__('About')}}</a>
                                    <ul class="submenu">
                                        <li><a href="{{'/' . config('app.locale') . '/about#about-us'}}">الهوية والرؤية</a></li>
                                        <li><a href="{{'/' . config('app.locale') . '/about'}}">الأهداف والأدوات</a></li>
                                        <li><a href="#">الرئيس</a></li>
                                        <li><a href="{{'/' . config('app.locale') . '/about#members-office'}}">المكتب التنفيذي</a></li>
                                        <li><a href="{{'/' . config('app.locale') . '/about#office-posts'}}">مجلس الحكماء</a></li>
                                        <li><a href="#">اللجان الخاصة</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">{{__('Statements')}}</a></li>
                                <li><a href="#">الفعاليات</a></li>
                                <li><a href="#">الأخبار</a></li>
                                <li><a href="#">الرسالة الدورية</a></li>
                                <li><a href="{{'/' . config('app.locale') . '/contact'}}">إتصل بنا</a></li>
                                <li><a href="#">إدعمنا</a></li>
                                <li class="me-auto">
                                    @if(\Illuminate\Support\Facades\App::getLocale() == "fr")
                                        <li><a href="{{url('/fr')}}">Français</a>
                                    @elseif(\Illuminate\Support\Facades\App::getLocale() == 'en')
                                        <li><a href="{{url('/en')}}">English</a>
                                    @elseif(\Illuminate\Support\Facades\App::getLocale() == 'de')
                                        <li><a href="{{url('/de')}}">Deutsche</a>
                                    @else
                                        <li><a href="{{url('/ar')}}">عربي</a>
                                    @endif

                                    <ul class="submenu">
                                        @if(\Illuminate\Support\Facades\App::getLocale() != "ar")<li><a href="{{url('/ar')}}">عربي</a></li>@endif
                                        @if(\Illuminate\Support\Facades\App::getLocale() != "en")<li><a href="{{url('/en')}}">English</a></li> @endif
                                        @if(\Illuminate\Support\Facades\App::getLocale() != "fr")<li><a href="{{url('/fr')}}">Français</a></li>@endif
                                        @if(\Illuminate\Support\Facades\App::getLocale() != "de")<li><a href="{{url('/de')}}">Deutsche</a></li>@endif
                                    </ul>
                                </li>

                                <li><a href="#search" data-bs-toggle="modal"><i class="fas fa-search"></i></a></li>

                            </ul>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Section Ends Here-->




<main>
    @yield('content')
</main>


@php

$footerPosts = \App\Models\Post::latest()->get()->take(2);

@endphp


<!-- Footer Section start here -->
<footer class="footer-section" style="background-image: url(assets/images/bg-images/footer-bg.png);">
    <div class="footer-top">
        <div class="container">
            <div class="row g-3 justify-content-center g-lg-0">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-top-item lab-item ">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{asset('assets/images/footer/footer-top/01.png')}}" alt="Phone-icon">
                            </div>
                            <div class="lab-content">
                                <span>+33 23 339 702 520</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-top-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{asset('assets/images/footer/footer-top/02.png')}}" alt="email-icon">
                            </div>
                            <div class="lab-content">
                                <span>contact@cc-ammale.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-top-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{asset('assets/images/footer/footer-top/03.png')}}" alt="location-icon">
                            </div>
                            <div class="lab-content">
                                <span>Place du Puits de l’Ermite, 75005 Paris</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle padding-tb tri-shape-3">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-middle-item-wrapper">
                        <div class="footer-middle-item mb-5 mb-lg-0">
                            <div class="fm-item-title">
                                <h5>عن آمال</h5>
                            </div>
                            <div class="fm-item-content">
                                <p class="mb-4">مؤسسة مستقلة مقرها باريس،وضع لبنتها الأولى الأفراد ومندوبو المؤسسات الإسلامية الذين اجتمعوا في المجلس التأسيسي المنعقد في يوم السبت 22 ربيع الأول 1445 هجري في مقر مسجد باريس الكبير</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-middle-item-wrapper">
                        <div class="footer-middle-item mb-5 mb-lg-0">
                            <div class="fm-item-title">
                                <h5>أخر الأخبار</h5>
                            </div>
                            <div class="fm-item-content">
                                @foreach($footerPosts as $post)
                                    <div class="fm-item-widget lab-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <a href="{{url('/ar/post/' . $post->slug())}}"> <img src="{{asset('storage/' . $post->thumbnail())}}"
                                                                  alt="footer-widget-img" style="height: 100px"></a>
                                            </div>
                                            <div class="lab-content">
                                                <h6><a href="{{url('/ar/post/' . $post->slug())}}">{{$post->title()}}</a></h6>
                                                <p>{{date_format($post->created_at,"d-m-Y")}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-middle-item-wrapper">
                        <div class="footer-middle-item-3 mb-5 mb-lg-0">
                            <div class="fm-item-title">
                                <h5>التصنيفات</h5>
                                <div class="widget widget-tags">
                                    <ul class="lab-ul widget-wrapper justify-content-start">
                                        @foreach($categories as $category)
                                            <li><a href="{{url('category/' . $category->title())}}" class="text-white">{{$category->title() . ' (' . count($category->posts) . ")"}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="fm-item-content">

                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-bottom-content text-center  my-0 py-4">
                        <img src="{{asset('assets/images/logo/logo-sans-write.svg')}}" class="mb-3" alt="logo" style="width: 120px">
                        <p>كل الحقوق محفوظة المجلس التنسيقي آمال &copy; 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section end here -->


<!-- scrollToTop start here -->
<a href="#" class="scrollToTop d-flex justify-content-center align-items-center"><i class="icofont-bubble-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
<!-- scrollToTop ending here -->


<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/fontawesome.min.js')}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/js/circularProgressBar.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/lightcase.js')}}"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>

</body>
</html>

