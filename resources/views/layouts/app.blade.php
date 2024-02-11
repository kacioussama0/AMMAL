<!DOCTYPE html>
<html lang="{{\Illuminate\Support\Facades\App::currentLocale()}}" dir="{{\Illuminate\Support\Facades\App::currentLocale() == 'ar' ? 'rtl' : 'ltr'}}">

<head>
    <title>{{config('app.name') . ' | '}} @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/logo/logo.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap{{(\Illuminate\Support\Facades\App::currentLocale() == 'ar' ? '.rtl' : '')}}.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min'. (\Illuminate\Support\Facades\App::currentLocale() == 'ar' ? '.rtl' : '') . '.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style' . (\Illuminate\Support\Facades\App::currentLocale() == 'ar' ? '.rtl' : '') .  '.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
</head>

<body>

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
                <div class="mobile-menu-wrapper d-flex flex-wrap align-items-center justify-content-between">
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="logo text-center">
                        <a href="{{url('/') . config('app.locale')}}">
                            <img src="{{asset('assets/images/logo/logo.png')}}" alt="logo" class="mb-2" style="width: 200px;height: 50px;object-fit: contain;">
                            <h6 style="font-size: 16px" class="my-0">المجلس التنسيقي آمال</h6>
                            <span style="font-size: 12px">تحالف المساجد والهيئات والقيادات الإسلامية في أوروبا</span>
                        </a>
                    </div>
                    <div class="ellepsis-bar d-lg-none">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-12">
                <div class="header-top">
                    <div class="header-top-area">
                        <ul class="left lab-ul">
                            <li>
                                <i class="icofont-ui-call"></i> <span>+33 23 339 702 520</span>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i> Place du Puits de l’Ermite, 75005 Paris

                            </li>
                        </ul>
                        <ul class="social-icons lab-ul d-flex">

                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>

                            <li>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </li>

                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>

                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="header-wrapper">
                        <div class="menu-area justify-content-between w-100">
                            <ul class="menu lab-ul">
                                <li>
                                    <a href="{{'/' . config('app.locale')}}">الرئيسية</a>
                                </li>

                                <li>
                                    <a href="#">عن آمال</a>
                                    <ul class="submenu">
                                        <li><a href="{{'/' . config('app.locale') . '/about#about-us'}}">الهوية والرؤية</a></li>
                                        <li><a href="{{'/' . config('app.locale') . '/about'}}">الأهداف والأدوات</a></li>
                                        <li><a href="#">الرئيس</a></li>
                                        <li><a href="{{'/' . config('app.locale') . '/about#members-office'}}">المكتب التنفيذي</a></li>
                                        <li><a href="{{'/' . config('app.locale') . '/about#office-posts'}}">مجلس الحكماء</a></li>
                                        <li><a href="#">اللجان الخاصة</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">البيانات</a></li>
                                <li><a href="#">الرسالة الدورية</a></li>
                                <li><a href="#">الفعاليات</a></li>
                                <li><a href="{{'/' . config('app.locale') . '/contact'}}">إتصل بنا</a></li>
                                <li><a href="#">إدعمنا</a></li>
                                <li><a href="#">إبحث</a></li>

                                <li class="ms-auto ">
                                    <a href="{{url('/ar')}}">عربي</a>
                                    <ul class="submenu">
                                        <li><a href="{{url('/en')}}">English</a></li>
                                        <li><a href="{{url('/fr')}}">Français</a></li>
                                        <li><a href="{{url('/de')}}">Deutsche</a></li>
                                    </ul>
                                </li>
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
                                                <a href="{{url('/ar/post/' . $post->slug)}}"> <img src="{{asset('storage/' . $post->thumbnail)}}"
                                                                  alt="footer-widget-img" style="height: 100px"></a>
                                            </div>
                                            <div class="lab-content">
                                                <h6><a href="{{url('/ar/post/' . $post->slug)}}">{{$post->title}}</a></h6>
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
                                <h5>OUR NEWSLETTER</h5>
                            </div>
                            <div class="fm-item-content">
                                <p>Hafsa is a nonproﬁt organization supported
                                    by community leaders</p>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter email">
                                    </div>
                                    <button type="submit" class="lab-btn">Send Massage <i
                                            class="icofont-paper-plane"></i></button>
                                </form>
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
                        <p>كل الحقوق محفوظة المجلس التنسيقي آمال &copy; 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section end here -->


<!-- scrollToTop start here -->
<a href="#" class="scrollToTop"><i class="icofont-bubble-up"></i><span class="pluse_1"></span><span
        class="pluse_2"></span></a>
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

