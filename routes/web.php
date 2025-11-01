<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home',['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/blog', function () {
    return view('Blog',['title' => 'Blog']);
});

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']);
});
