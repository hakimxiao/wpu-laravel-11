<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['name' => 'Abo Solihin Alhakim', 'title' => 'ABout Page']);
});

Route::get('/posts', function () {

    
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(6)]);
});


Route::get('/posts/{post:slug}', function (Post $post) {


    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {

    return view('posts', ['title' => count($user->posts) . ' Articles By ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {

    return view('posts', ['title' => ' Articles In : ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
