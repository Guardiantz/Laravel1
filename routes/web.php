<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Yova Andre', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

//ini menggunakan method binding dengan menggunakan post:slug artinya yg di cari bukan id lagi tapi slug ex judul-artikel-1
Route::get('/posts/{post:slug}', function (Post $post) {

    // $post = Post::find($id);
    //menggunakan method find untuk menemukan query seperti $id atau slug

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
Route::get('/authors/{user}', function (User $user) {
    return view('posts', ['title' => 'Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
