<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'pageTitle' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'pageTitle' => 'About',
        'name' => 'Ridho Fauzan'
    ]);
});

Route::get('/posts', function () {
    // lazy loading itu akan mengquery 1 data terus secara berulang2, dan itu mengakibatkan lemot
    // #Coba lihat di App\Models\Posts.php
    // tetapi bisa juga gunakan bigger loading secara default, jadi penulisan di bawah ini tidak di perlukan
    $posts = Post::with(['author', 'category'])->latest()->get(); // with bigger loading, kebalikan dari lazy loading
    // $posts = Post::all(); // lazy loading


    return view('posts', [
        'pageTitle' => 'Blog',
        'posts' => $posts
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    // $post = Post::find($post);

    return view('post', [
        'pageTitle' => 'blog by: ' . $post->author->name,
        'post' => $post
    ]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // lazy loading itu akan mengquery 1 data terus secara berulang2, dan itu mengakibatkan lemot
    // #Coba lihat di App\Models\Posts.php
    // tetapi bisa juga gunakan bigger loading secara default, jadi penulisan di bawah ini tidak di perlukan
    $posts = $user->posts->load('category', 'author'); // With Lazy Bigger Loading
    // $posts = $category->posts; // lazy loading

    return view('posts', [
        'pageTitle' => count($posts) . ' Article by: ' . $user->name,
        'posts' => $posts
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // lazy loading itu akan mengquery 1 data terus secara berulang2, dan itu mengakibatkan lemot
    // #Coba lihat di App\Models\Posts.php
    // tetapi bisa juga gunakan bigger loading secara default, jadi penulisan di bawah ini tidak di perlukan
    $posts = $category->posts->load('category', 'author');; // With Lazy Bigger Loading
    // $posts = $category->posts; // lazy loading


    return view('posts', [
        'pageTitle' => count($posts) . ' Article In Category: ' . $category->name,
        'posts' => $posts
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'pageTitle' => 'Contact',
        'image' => 'img/KZ.jpg',
        'name' => 'Ridho Fauzan',
        'email' => 'ridhofauzan275@gmail.com',
        'sosmed' => 'https://stackoverflow.com/questions/43187735/laravel-create-model-controller-and-migration-in-single-artisan-command'
    ]);
});
