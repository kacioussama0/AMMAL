@extends('layouts.app')
@section('title','تواصلوا معنا')


@section('content')

    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb" id="about-us" style="background-image: url('{{asset('assets/images/banner/header-shape.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">عن آمال</h4>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- About section start here -->
    <section class="about-section padding-tb shape-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="lab-item">
                        <div class="lab-inner">
                            <div class="lab-content">
                                <div class="header-title text-start m-0">
                                    <h2 class="my-4 fw-bolder">عن آمال</h2>
                                </div>
                                <p>مؤسسة مستقلة بعض الدول الأوروبية، بدءا بالعاصمة يف فرعية باريس، وستكون لديها مقار يس مقرها الرئي بروكسيل. وضع لبنتها الأولى الأفراد ومندوبو المؤسسات الإسلامية الذين اجتمعوا يسيس لتأ المجلس ا يف المنعقد يف يوم السبت  22ربيع الأول  1445هـ الموافق  7أكتوبر  2023م مقر مسجد باريس الكبي يف ، قادمي من  17دولة أوروبية. تم اعتمادها يف لفرنسية من قبل السلطات ا  17نوفم ري  2023السادس يف سيسية لتأ ، بعد انعقاد الجلسة الثانية للجمعية العامة ا من نفس الشهر</p>
                                <a href="#" class="lab-btn mt-4">Ask About Islam <i class="icofont-heart-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <div class="img-grp">
                                    <div class="about-circle-wrapper">
                                        <div class="about-circle-2"></div>
                                        <div class="about-circle"></div>
                                    </div>
{{--                                    <div class="about-fg-img">--}}
{{--                                        <img src="{{asset('assets/images/about/02.png')}}" alt="about-image">--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section end here -->

    <!-- Feature Section Start Here -->
    <section class="feature-section bg-ash padding-tb" id="office-posts">
        <div class="container">

            <h2 class="mb-5">لجان المجلس التنسيقي آمال</h2>

            <div class="table-responsive">
                <table class="table table-secondary table-striped">
                    <tbody>
                        <tr>
                            <td>لجنة التعليم (التكميلي والنظامي)</td>
                            <td>لجنة الإتصال والتنسيق مع الهيئات الإسلامية</td>
                        </tr>

                        <tr>
                            <td>لجنة التواصل مع النخب الأوروبية (الفكرية، الإعلامية، السياسية...)</td>
                            <td>لجنة الحوار الديني والإنساني</td>
                        </tr>

                        <tr>
                            <td>اللجنة الحقوقية</td>
                            <td>اللجنة الشرعية والدينية</td>
                        </tr>

                        <tr>
                            <td>لجنة الأوقاف الاستثمار</td>
                            <td>لجنة الإعلام</td>
                        </tr>


                        <tr>
                            <td>لجنة المسلمين الجدد</td>
                            <td>لجنة التحرير والترجمة والنشر</td>
                        </tr>

                        <tr>
                            <td>اللجنة الخيية والإنسانية</td>
                            <td>لجنة الوقاية ومكافحة التطرف</td>
                        </tr>

                        <tr>
                            <td>لجنة الوساطة وحل النزاعات</td>
                            <td>لجنة القيم والأخلاق</td>
                        </tr>

                        <tr>
                            <td>لجنة الصحة والغذاء (دواء مخدرات والغذاء الحلال)</td>
                            <td>لجنة البيئة والمناخ</td>
                        </tr>

                        <tr>
                            <td>لجنة التراث والتاريخي الإسلامي</td>
                            <td>لجنة حماية المساجد</td>
                        </tr>

                        <tr>
                            <td>لجنة الشؤون الإجتماعية والأسرة</td>
                            <td>لجنة الشباب</td>
                        </tr>

                        <tr>
                            <td colspan="2">لجنة المسابقات القرآنية</td>
                        </tr>

                        <tr>
                            <td colspan="2">المرصد: لجنة مكلفة برصد المعلومات والتقارير والمناشط حول الإسلام و المسلمين في أوروبا.</td>
                        </tr>

                    </tbody>
                </table>
            </div>

{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-3 col-sm-6 col-12">--}}
{{--                    <div class="lab-item feature-item text-xs-center">--}}
{{--                        <div class="lab-inner">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{asset('assets/images/feature/01.png')}}" alt="feature-image">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h5>Quran Studies</h5>--}}
{{--                                <p>Lorem ipsum dolor sit, amet is consectetur adipisicing elit.Its expedita porro natus--}}
{{--                                </p>--}}
{{--                                <a href="#" class="text-btn">Sponsor Now!</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-sm-6 col-12">--}}
{{--                    <div class="lab-item feature-item">--}}
{{--                        <div class="lab-inner">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{asset('assets/images/feature/02.png')}}" alt="feature-image">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h5>Islamic Classes</h5>--}}
{{--                                <p>Lorem ipsum dolor sit, amet is consectetur adipisicing elit.Its expedita porro natus--}}
{{--                                </p>--}}
{{--                                <a href="#" class="text-btn">Donate Now!</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-sm-6 col-12">--}}
{{--                    <div class="lab-item feature-item">--}}
{{--                        <div class="lab-inner">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{asset('assets/images/feature/03.png')}}" alt="feature-image">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h5>Islamic Awareness</h5>--}}
{{--                                <p>Lorem ipsum dolor sit, amet is consectetur adipisicing elit.Its expedita porro natus--}}
{{--                                </p>--}}
{{--                                <a href="#" class="text-btn">Join Us!</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-sm-6 col-12">--}}
{{--                    <div class="lab-item feature-item">--}}
{{--                        <div class="lab-inner">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{asset('assets/images/feature/04.png')}}" alt="feature-image">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h5>Islamic Services</h5>--}}
{{--                                <p>Lorem ipsum dolor sit, amet is consectetur adipisicing elit.Its expedita porro natus--}}
{{--                                </p>--}}
{{--                                <a href="#" class="text-btn">Get Involved!</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>
    <!-- Feature Section End Here -->

    <!-- Team section start here -->
    <section class="team-section padding-tb" id="members-office">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title">
                        <h2>المكتب التنفيذي</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row justify-content-center gy-4 pb-10">

                        @php

                         $members =  [

                                        ["name" => "شمس الدين محمد حفيز","occupation" => "الرئيس","image" => "hafiz.jpg"],
                                        ["name" => "خالد ياسين","occupation" => "نائب الرئيس مكلف بالتواصل مع الهيئات الإسلامية","image" => "yassin.jpg"],
                                        ["name" => "أحمد بن سعد آل مفرح","occupation" => "نائب الرئيس مكلف بالتواصل مع النخب الأوروبية","image" => "ahmad-mfrah.jpg"],
                                        ["name" => "عبد الصمد اليزيدي","occupation" => "نائب الرئيس مكلف بالحوار الديني والإنساني","image" => "yazidi.webp"],
                                        ["name" => "حسان موسى","occupation" => "نائب الرئيس مكلف بالتواصل مع المسلمين","image" => "hassan.jpg"],
                                        ["name" => "فريد حناش","occupation" => "الأمين العام","image" => "avatar.jpg"],
                                        ["name" => "فايد محمد السعيد","occupation" => "نائب الأمين العام","image" => "faid.webp"],
                                        ["name" => "نصرت رمضان","occupation" => "نائب الأمين العام","image" => "avatar.jpg"],
                                        ["name" => "محمد الونوغي","occupation" => "أمين الصندوق","image" => "abd-samad.jpg"],
                                        ["name" => "أحمد تميم","occupation" => "مستشار المكتب","image" => "ahmad-tamim.jpg"],
                                        ["name" => "نفيع الله عشيورف","occupation" => "مستشار المكتب","image" => "achirof.jpeg"],
                                        ["name" => "حسام بن صديق خوجة","occupation" => "مستشار المكتب","image" => "khoja.jpg"],
                                        ["name" => "مهاجري زيان","occupation" => "مستشار المكتب","image" => "ziyan.jpg"],
                                    ]

                        @endphp


                        @foreach($members as $member)
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="card text-center border-none team-item-1 pattern-2 h-100">
                                <div class="lab-inner">
                                    <div class="lab-thumb">
                                        <img src="{{asset('assets/images/members/' . $member['image'])}}" class="card-img-top" alt="product" style="width: 200px;height: 200px;object-fit: cover;object-position: top">
                                    </div>
                                    <div class="lab-content">

                                         <h6 class="card-title mb-3">{{$member['name']}}</h6>

                                        <div class="social-share">
                                            <p class="card-text my-3">{{$member['occupation']}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team section end here -->

    <!-- Qoute Section start Here -->
    <div class="qoute-section padding-tb">
        <div class="qoute-section-wrapper">
            <div class="qoute-overlay"></div>
            <div class="container">
                <div class="qoute-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="lab-item qoute-item">
                                <div class="lab-inner d-flex align-items-center">
                                    <div class="lab-thumb">
                                        <span>Quote From
                                            Prophat</span>
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                    <div class="lab-content">
                                        <blockquote class="blockquote">
                                            <p>Hazrat Mohammod (s) Said <span>"It is Better For Any Of You
                                                    To Carry A Load Of Firewood On His Own Back Than To
                                                    Beg From Someone Else"</span> </p>
                                            <footer class="blockquote-footer bg-transparent">Riyadh-Us-Saleheen, Chapter
                                                59, hadith 540
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Qoute Section end Here -->

    <!-- Faith section start here -->
    <section class="faith-section padding-tb shape-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title">
                        <h5>The Pillars of Islam</h5>
                        <h2>Ethical And Moral Beliefs That Guides
                            To The Straight Path!</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="faith-content">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="shahadah" role="tabpanel"
                                 aria-labelledby="sahadah-tab">
                                <div class="lab-item faith-item tri-shape-1 pattern-2">
                                    <div class="lab-inner d-flex align-items-center">
                                        <div class="lab-thumb">
                                            <img src="{{asset('assets/images/faith/01.png')}}" alt="faith-image">
                                        </div>
                                        <div class="lab-content">
                                            <h4>الهوية</h4>
                                            <p>مؤسسة مستقلة بعض الدول الأوروبية، بدءا بالعاصمة يف فرعية باريس، وستكون لديها مقار يس مقرها الرئي بروكسيل. وضع لبنتها الأولى الأفراد ومندوبو المؤسسات الإسلامية الذين اجتمعوا يسيس لتأ المجلس ا يف المنعقد يف يوم السبت  22ربيع الأول  1445هـ الموافق  7أكتوبر  2023م مقر مسجد باريس الكبي يف ، قادمي من  17دولة أوروبية. تم اعتمادها يف لفرنسية من قبل السلطات ا  17نوفم ري  2023السادس يف سيسية لتأ ، بعد انعقاد الجلسة الثانية للجمعية العامة ا من نفس الشهر</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prayer" role="tabpanel" aria-labelledby="salah-tab">
                                <div class="lab-item faith-item tri-shape-1 pattern-2">
                                    <div class="lab-inner d-flex align-items-center">
                                        <div class="lab-thumb">
                                            <img src="{{asset('assets/images/faith/02.png')}}" alt="faith-image">
                                        </div>
                                        <div class="lab-content">
                                            <h4>أهداف المجلس آمال التنسيق وفقا لدستوره</h4>
                                            <p>Each Muslim should pray five times a day: in the morning, at noon, in
                                                the afternoon, after sunset, and early at night. These prayers can be
                                                said anywhere, prayers that are said in company of others are better
                                                than those said alone.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ramadan" role="tabpanel" aria-labelledby="sawm-tab">
                                <div class="lab-item faith-item tri-shape-1 pattern-2">
                                    <div class="lab-inner d-flex align-items-center">
                                        <div class="lab-thumb">
                                            <img src="{{asset('assets/images/faith/03.png')}}" alt="faith-image">
                                        </div>
                                        <div class="lab-content">
                                            <h4>Sawm <span>(Fasting)</span> </h4>
                                            <p>Each Muslim should pray five times a day: in the morning, at noon, in
                                                the afternoon, after sunset, and early at night. These prayers can be
                                                said anywhere, prayers that are said in company of others are better
                                                than those said alone.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="jakat" role="tabpanel" aria-labelledby="zakat-tab">
                                <div class="lab-item faith-item tri-shape-1 pattern-2">
                                    <div class="lab-inner d-flex align-items-center">
                                        <div class="lab-thumb">
                                            <img src="{{asset('assets/images/faith/04.png')}}" alt="faith-image">
                                        </div>
                                        <div class="lab-content">
                                            <h4>Zakat <span>(Almsgiving)</span> </h4>
                                            <p>Each Muslim should pray five times a day: in the morning, at noon, in
                                                the afternoon, after sunset, and early at night. These prayers can be
                                                said anywhere, prayers that are said in company of others are better
                                                than those said alone.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="hajj" role="tabpanel" aria-labelledby="hajj-tab">
                                <div class="lab-item faith-item tri-shape-1 pattern-2">
                                    <div class="lab-inner d-flex align-items-center">
                                        <div class="lab-thumb">
                                            <img src="{{asset('assets/images/faith/05.png')}}" alt="faith-image">
                                        </div>
                                        <div class="lab-content">
                                            <h4>Hajj <span>(Pilgrimage)</span> </h4>
                                            <p>Each Muslim should pray five times a day: in the morning, at noon, in
                                                the afternoon, after sunset, and early at night. These prayers can be
                                                said anywhere, prayers that are said in company of others are better
                                                than those said alone.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-pills mb-3 align-items-center justify-content-center" id="pills-tab"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="sahadah-tab" data-bs-toggle="pill" href="#shahadah"
                                   role="tab" aria-controls="sahadah-tab" aria-selected="true">
                                    <img src="{{asset('assets/images/faith/faith-icons/01.png')}}" alt="faith-icon">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="salah-tab" data-bs-toggle="pill" href="#prayer" role="tab"
                                   aria-controls="salah-tab" aria-selected="false">
                                    <img src="{{asset('assets/images/faith/faith-icons/02.png')}}" alt="faith-icon">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="sawm-tab" data-bs-toggle="pill" href="#ramadan" role="tab"
                                   aria-controls="sawm-tab" aria-selected="false">
                                    <img src="{{asset('assets/images/faith/faith-icons/03.png')}}" alt="faith-icon">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="zakat-tab" data-bs-toggle="pill" href="#jakat" role="tab"
                                   aria-controls="zakat-tab" aria-selected="false">
                                    <img src="{{asset('assets/images/faith/faith-icons/04.png')}}" alt="faith-icon">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="hajj-tab" data-bs-toggle="pill" href="#hajj" role="tab"
                                   aria-controls="hajj-tab" aria-selected="false">
                                    <img src="{{asset('assets/images/faith/faith-icons/05.png')}}" alt="faith-icon">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faith section end here -->

@endsection