<?php

use App\Http\Controllers\CategoryController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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

Route::get('/test', [PostController::class, 'index']);


Route::get('/inisaya', function () {
    return view('inisaya', [
        "title" => "Saya",
        "name" => "Kanz Abdillah Hamada",
        "nim" => "2602170202",
        "semester" => 4,
        "image" => "xfb.jpg",
        "active" => "saya"
    ]);
});


Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/test/{post:slug}', [PostController::class, 'show']);

Route::get('/categories/{category:slug}', function(Category $category){
    return view('test', [
        'title' => "Category: $category->name",
        'posts' => $category->posts->load('category', 'author'),
        'category' => $category->name,
        'active' => 'categories'
    ]);
});

Route::get('/categories/', [CategoryController::class, 'index']);

Route::get('/author/{author:username}', function(User $author){
    return view('test', [
        'title' => "Posts by: $author->name",
        'posts' => $author->posts->load('category', 'author'),
        'active' => 'test'
    ]);
});