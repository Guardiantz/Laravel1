<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Yova Andre', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [

            'id' => 1,
            'slug' => 'Judul-Artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Yova Andre',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe accusamus ea quaerat. Commodi minima cum adipisci fuga. Optio repellat exercitationem repellendus rem esse obcaecati.'
        ],
        [
            'id' => 2,
            'slug' => 'Judul-Artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Andre yova',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem culpa aliquam adipisci, omnis vero quidem quas, hic, quisquam et nesciunt ab? Nihil ab ea dicta velit sit est iste illum'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    // dd($id); untuk ngecek apakah data nya masuk atau ga terhubung
    $posts = [
        [

            'id' => 1,
            'slug' => 'Judul-Artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Yova Andre',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe accusamus ea quaerat. Commodi minima cum adipisci fuga. Optio repellat exercitationem repellendus rem esse obcaecati.'
        ],
        [
            'id' => 2,
            'slug' => 'Judul-Artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Andre yova',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem culpa aliquam adipisci, omnis vero quidem quas, hic, quisquam et nesciunt ab? Nihil ab ea dicta velit sit est iste illum'
        ]
    ];
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;

        //artinya di callback fungsinya dengan mencari elemen $post. jika $post id itu sama dengan id 
    });
    
    // dd($post); untuk ngecek apakah data nya masuk atau ga terhubung
    //kirim view yang mengirimkan datanya title yang diisi dengan post dengan var post
    return view ('post', ['title' => 'Single Post','post' => $post]);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
