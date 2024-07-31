<?php

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
    return view('posts', [
        'pageTitle' => 'Blog',
        'posts' => Post::all()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    // $post = Post::find($post);

    return view('post', [
        'pageTitle' => 'blog by: ' . $post->author->name,
        'post' => $post
    ]);
});

Route::get('/authors/{user}', function (User $user) {
    return view('posts', [
        'pageTitle' => 'blog by: ' . $user->name,
        'posts' => $user->posts
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
