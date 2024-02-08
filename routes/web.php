<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test', function () {
    $blog_posts = [
        [
            "title" => "Judul Pertama",
            "author" => "Kanz",
            "content" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo dolorem cum doloribus quia optio aliquam minima? Dolorum 
            nostrum quos vitae ex magni consequuntur ad, ipsa pariatur veniam cum facere accusamus exercitationem neque omnis, commodi 
            consequatur voluptatibus maxime atque at aspernatur enim earum tenetur velit recusandae? Nostrum ducimus quo dolor autem molestiae 
            vero unde quasi dolores quisquam ut, officia, quae, eveniet labore facilis voluptates! Ipsam ipsum voluptatum consectetur 
            necessitatibus earum."
        ],
        [
            
            "title" => "Judul Kedua",
            "author" => "Abdillah",
            "content" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo dolorem cum doloribus quia optio aliquam minima? Dolorum 
            nostrum quos vitae ex magni consequuntur ad, ipsa pariatur veniam cum facere accusamus exercitationem neque omnis, commodi 
            consequatur voluptatibus maxime atque at aspernatur enim earum tenetur velit recusandae? Nostrum ducimus quo dolor autem molestiae 
            vero unde quasi dolores quisquam ut, officia, quae, eveniet labore facilis voluptates! Ipsam ipsum voluptatum consectetur 
            necessitatibus earum."
            
        ]
    ];
    return view('test', [
        "title" => "Test",
        "posts" => $blog_posts
    ]);
});

Route::get('/inisaya', function () {
    return view('inisaya', [
        "title" => "Saya",
        "name" => "Kanz Abdillah Hamada",
        "nim" => "2602170202",
        "semester" => 4,
        "image" => "xfb.jpg"
    ]);
});


Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});