@extends('layouts.app')

@section('title','صفحة غير موجودة')

@section('content')

    <!-- Error Page start Here -->
    <section class="error-section padding-tb pattern-2">
        <div class="container">
            <div class="error-wrapper d-flex justify-content-center flex-column align-items-center">
                <div>
                    <img src="{{asset('assets/images/logo/logo.png')}}" alt="logo">
                </div>
                <div class="error-content text-center mt-5">
                    <h3 class="mb-4">عذرا! الصفحة غير موجودة</h3>
                    <a href="{{'/' . config('app.locale')}}" class="lab-btn"><span>الرجوع للرئيسية</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Error Page end Here -->


@endsection
