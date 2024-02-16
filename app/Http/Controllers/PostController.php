<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index(){
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' pada ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' oleh ' . $author->name;
        }

        // $postsPerPage = request()->page == 1 || request()->input('test') == 'test' ? 7 : 9;
        // $limit = request()->page == 1 ? 7 : 9;

        return view('test', [
            "title" => "Berita Terkini" . $title,
            // "posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString(),
            "otherPost" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(9)->withQueryString(),
            "active" => "test"
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "title" => $post->title,
            "post" => $post,
            "active" => "test"
        ]);
    }
}
