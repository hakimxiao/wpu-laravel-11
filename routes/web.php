<?php

use App\Models\Category;
use App\Models\Post; // yang dipanggil adalah namespace nya yaitu file model nya
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['name' => 'Abo Solihin Alhakim', 'title' => 'ABout Page']);
});

// # eager loading * solusi untuk masalah N + 1, dimana kita mendapatkan query beruntun padahal bisa satu query
Route::get('/posts', function () {
    // $post = Post::with(['author', 'category'])->latest()->get();
    
    $posts = Post::latest()->get();
    return view('posts', ['title' => 'Blog Page', 'posts' => $posts]);
});


Route::get('/posts/{post:slug}', function (Post $post) {
  
    // $post = Post::find($slug); // find : dia khusus bertugas mencari id

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// # lazy eager loading * untuk mengatasi n + 1 yang ada setelah pemanggilan parent
Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load('category', 'author');
  
    return view('posts', ['title' => count($user->posts) . ' Articles By ' . $user->name , 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts  =$category->posts->load('category', 'author');
  
    return view('posts', ['title' => ' Articles In : ' . $category->name , 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
