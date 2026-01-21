<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Yova Andre', 'title' => 'About']);
});

Route::get('/posts', function () {
    //menggunakan N+1 untuk mengurangi querry
    // $posts = Post::with(['author', 'category'])->latest()->get();
    $posts = Post::latest()->get();
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load('category', 'author');

    return view('posts', [
        'title' => count($user->posts) . ' Articles by ' . $user->name,
        'posts' => $user->posts
    ]);

    Route::get('/categories/{category:slug}', function (Category $category) {
        return view('posts', [
            'title' => 'Articles in: ' . $category->name,
            'posts' => $category->posts
        ]);
    });
    Route::get('/blog', function () {
        return view('blog', ['title' => 'Blog']);
    });

    Route::get('/contact', function () {
        return view('contact', ['title' => 'Contact']);
    });

    // Perintah untuk menjalankan php artisan tinker untuk menampilkan user dan category 
    // App\Models\Post::factory(100)->recycle([Category::factory(3)->create(), User::factory(5)->create()])->create();

});
