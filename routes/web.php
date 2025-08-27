<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['name' => 'Abo Solihin Alhakim','title'=> 'ABout Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-article-pertama',
            'title' => 'Judul Article Pertama',
            'author' => 'Abu Solihin Alhakim',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam expedita tenetur ea hic, doloribus velit optio non exercitationem temporibus molestiae, tempore nulla dicta quisquam itaque e arum quibusdam numquam minima, qui quia dolore id enim cumque nemo maiores? Numquam recusandae molestias, deserunt libero accusantium fugiat perspiciatis earum totam quas magni commodi!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-article-kedua',
            'title' => 'Judul Article Kedua',
            'author' => 'Hakimxiao',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam expedita tenetur ea hic, doloribus velit optio non exercitationem temporibus molestiae, tempore nulla dicta quisquam itaque earum quibusdam numquam minima, qui quia dolore id enim cumque nemo maiores? Numquam recusandae molestias, deserunt libero accusantium fugiat perspiciatis earum totam quas magni commodi!'
        ]
    ]]);
});

// wilecard
Route::get('/posts/{slug}', function($slug) {
    $posts = [
            [
                'id' => 1,
                'slug' => 'judul-article-pertama',
                'title' => 'Judul Article Pertama',
                'author' => 'Abu Solihin Alhakim',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam expedita tenetur ea hic, doloribus velit optio non exercitationem temporibus molestiae, tempore nulla dicta quisquam itaque e arum quibusdam numquam minima, qui quia dolore id enim cumque nemo maiores? Numquam recusandae molestias, deserunt libero accusantium fugiat perspiciatis earum totam quas magni commodi!'
            ],
            [
                'id' => '2',
                'slug' => 'judul-article-kedua',
                'title' => 'Judul Article Kedua',
                'author' => 'Hakimxiao',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam expedita tenetur ea hic, doloribus velit optio non exercitationem temporibus molestiae, tempore nulla dicta quisquam itaque earum quibusdam numquam minima, qui quia dolore id enim cumque nemo maiores? Numquam recusandae molestias, deserunt libero accusantium fugiat perspiciatis earum totam quas magni commodi!'
            ]
        ];
    
        // -- TIPS -- LARAVEL SUPORT ARRAY
        // use : MEnggunakan attribute secara global tanpa batas scope
    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

