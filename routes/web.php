<?php

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
        'posts' => [
            [
                'id' => 1,
                'title' => 'The Biggest Penis Ever.',
                'slug' => 'the-biggest-penis-ever',
                'author' => 'Yahya Sudirman',
                'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi et accusantium quod iste laboriosam
                    corrupti nihil vitae cumque. Molestias dolore mollitia deserunt a porro quas aliquid, nobis rerum
                    voluptatemrepudiandae.</p>'
            ],
            [
                'id' => 2,
                'title' => 'The Biggest Boobs Ever.',
                'slug' => 'the-biggest-boobs-ever',
                'author' => 'Sulton mubakar',
                'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis cumque obcaecati reiciendis nisi
                    tenetur, voluptatem, minima accusantium officiis, quisquam rerum explicabo aliquid! Facilis
                    perferendis eaque possimus harum omnis accusantium ut.</p>'
            ]
        ]
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'title' => 'The Biggest Penis Ever.',
            'slug' => 'the-biggest-penis-ever',
            'author' => 'Yahya Sudirman',
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi et accusantium quod iste laboriosam
                corrupti nihil vitae cumque. Molestias dolore mollitia deserunt a porro quas aliquid, nobis rerum
                voluptatemrepudiandae.</p>'
        ],
        [
            'id' => 2,
            'title' => 'The Biggest Boobs Ever.',
            'slug' => 'the-biggest-boobs-ever',
            'author' => 'Sulton mubakar',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis cumque obcaecati reiciendis nisi
                tenetur, voluptatem, minima accusantium officiis, quisquam rerum explicabo aliquid! Facilis
                perferendis eaque possimus harum omnis accusantium ut.</p>'
        ]
    ];
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', [
        'pageTitle' => 'blog by: ',
        'post' => $post
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
