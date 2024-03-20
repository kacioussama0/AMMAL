
<?php

use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->group(function () {


//    \Illuminate\Support\Facades\App::setLocale('en');

    Route::view('/','dashboard.index');
    Route::resource('users',\App\Http\Controllers\UserController::class);
    Route::resource('categories',\App\Http\Controllers\CategoryController::class);
    Route::resource('posts',\App\Http\Controllers\PostController::class);
    Route::resource('tags',\App\Http\Controllers\TagController::class);
});

Route::redirect('/','/' . config('app.locale'));

Route::get('/{lang}',[\App\Http\Controllers\SiteController::class,'home']);
Route::get('/{lang}/category/{slug}',[\App\Http\Controllers\SiteController::class,'category']);
Route::get('/{lang}/post/{slug}',[\App\Http\Controllers\SiteController::class,'post']);
Route::get('/{lang}/contact',[\App\Http\Controllers\SiteController::class,'contact']);
Route::get('/{lang}/about',[\App\Http\Controllers\SiteController::class,'about']);
Route::view('/{lang}/login','login');

