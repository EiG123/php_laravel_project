<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::fallback(function(){
    return "<h1>ไม่พบหน้าเว็บ</h1> <br> <a href='/'>back<a>";
});