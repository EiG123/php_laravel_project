<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    $blogs = [
        [
            'title' => 'บทความที่ 1',
            'content' => 'เนื้อหาบทความที่ 1',
            'status' => true
        ],
        [
            'title' => 'บทความที่ 2',
            'content' => 'เนื้อหาบทความที่ 2',
            'status' => false
        ],
        [
            'title' => 'บทความที่ 3',
            'content' => 'เนื้อหาบทความที่ 3',
            'status' => true
        ],
        [
            'title' => 'บทความที่ 4',
            'content' => 'เนื้อหาบทความที่ 4',
            'status' => true
        ],
        [
            'title' => 'บทความที่ 5',
            'content' => 'เนื้อหาบทความที่ 5',
            'status' => true
        ],
    ];
    return view('blog', compact('blogs'));
})->name('blog');

Route::get('/about', function () {
    $name = "Tanakron Narinsuvan";
    $Thainame = "ธนกร นรินสุวรรณ";
    $date = "30 April 2025";

    return view('about', compact('name', 'Thainame', 'date'));
})->name('about');

Route::fallback(function(){
    return "<h1>ไม่พบหน้าเว็บ</h1> <br> <a href='/'>back<a>";
});