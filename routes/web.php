<?php

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
            'title' => 'Judul Article Pertama',
            'author' => 'Abu Solihin Alhakim',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam expedita tenetur ea hic, doloribus velit optio non exercitationem temporibus molestiae, tempore nulla dicta quisquam itaque e arum quibusdam numquam minima, qui quia dolore id enim cumque nemo maiores? Numquam recusandae molestias, deserunt libero accusantium fugiat perspiciatis earum totam quas magni commodi!'
        ],
        [
            'id' => '2',
            'title' => 'Judul Article Kedua',
            'author' => 'Hakimxiao',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam expedita tenetur ea hic, doloribus velit optio non exercitationem temporibus molestiae, tempore nulla dicta quisquam itaque earum quibusdam numquam minima, qui quia dolore id enim cumque nemo maiores? Numquam recusandae molestias, deserunt libero accusantium fugiat perspiciatis earum totam quas magni commodi!'
        ]
    ]]);
});



Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

