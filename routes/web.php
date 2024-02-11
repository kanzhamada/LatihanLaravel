<?php

use App\Models\Post;
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
        "image" => "xfb.jpg"
    ]);
});


Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get(
    '/test/{post:slug}', [PostController::class, 'show']);