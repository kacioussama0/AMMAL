@extends('layouts.app')
@section('title','تواصلوا معنا')


@section('content')

    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb" style="background-image: url('{{asset('assets/images/banner/header-shape.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h1 class="ph-title">تواصلوا معنا</h1>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- Contact Us Section Start Here -->
    <div class="contact-section">
        <div class="contact-top padding-tb aside-bg padding-b">
            <div class="container">
                <div class="row mx-5">
                    <div class="col-lg-8">
                        <article class="contact-form-wrapper">
                            <div class="contact-form">
                                <h4 class="mb-5">أرسل رسالة</h4>
                                <form action="#" method="POST" id="commentform" class="comment-form">
                                    <input type="text" name="name" class="" placeholder="الإسم*">
                                    <input type="email" name="email" class="" placeholder="البريد الإلكتروني*">
                                    <textarea name="text" id="role" cols="30" rows="9"
                                              placeholder="الرسالة*"></textarea>
                                    <button type="submit" class="lab-btn">
                                        <span>إرسال</span>
                                    </button>
                                </form>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-info-wrapper">
                            <div class="contact-info-title">
                                <h5>احصل على المعلومات</h5>
                                <p>تفاصيل معلومات الاتصال الخاصة بنا و
                                    تابعنا على وسائل التواصل الإجتماعي</p>
                            </div>
                            <div class="contact-info-content">
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="{{asset('assets/images/contact/01.png')}}" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">عنوان المكتب</span>
                                            <p>Place du Puits de l’Ermite, 75005 Paris</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="{{asset('assets/images/contact/02.png')}}" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">رقم التليفون</span>
                                            <p dir="ltr" class="text-start">+33 23 339 702 520</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="{{asset('assets/images/contact/03.png')}}" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">ارسل بريد</span>
                                            <p>contact@cc-ammale.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="{{asset('assets/images/contact/04.png')}}" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">موقعنا</span>
                                            <p>www.cc-ammale.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-bottom">
            <div class="contac-bottom">
                <div class="row justify-content-center g-0">
                    <div class="col-12">
                        <div class="location-map">
                            <div id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.8292172808597!2d2.3539781!3d48.842396199999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671ee22674e8f%3A0x5aab2e3fa218f225!2sPl.%20du%20Puits%20de%20l&#39;Ermite%2C%2075005%20Paris%2C%20France!5e0!3m2!1sfr!2sdz!4v1706826297791!5m2!1sfr!2sdz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Contact Us Section ENding Here -->

@endsection
