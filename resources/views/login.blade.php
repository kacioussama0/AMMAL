@extends('layouts.app')

@section('title','تسجيل الدخول')

@section('content')


    <!-- Page Header Section Start Here -->
<section class="page-header bg_img padding-tb" style="background-image: url('{{asset('assets/images/banner/header-shape.jpg')}}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-header-content-area">
            <h4 class="ph-title">تسجيل الدخول</h4>

        </div>
    </div>
</section>
<!-- Page Header Section Ending Here -->

<!-- Login Section Section Starts Here -->
<div class="login-section padding-tb">
    <div class=" container">
        <div class="account-wrapper">
            <h3 class="title">سجل الدخول</h3>
            <img src="{{asset('assets/images/logo/logo.png')}}" alt="ammale" width="150" class="mb-3 d-block mx-auto">
            <form class="account-form">
                <div class="form-group">
                    <input type="text" placeholder="الإسم" name="username">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="كلمة السر" name="password">
                </div>
                <div class="form-group">
                    <div class="d-flex justify-content-between flex-wrap pt-sm-2">
                        <div class="checkgroup">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">تذكرني</label>
                        </div>
                        <a href="#">نسيت كلمة السر?</a>
                    </div>
                </div>
                <div class="form-group">
                    <button class="d-block lab-btn"><span>تسجيل الدخول</span></button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Login Section Section Ends Here -->

@endsection
