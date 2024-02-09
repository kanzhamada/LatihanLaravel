<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('test', [
            "title" => "Test",
            "posts" => Post::all()
        ]);
    }

    public function show($slug){
        $post = Post::find($slug);
        return view('post', [
            "title" => $post["title"],
            "post" => $post
        ]);
    }
}
