<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Kanz",
            "content" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo dolorem cum doloribus quia optio aliquam minima? Dolorum 
            nostrum quos vitae ex magni consequuntur ad, ipsa pariatur veniam cum facere accusamus exercitationem neque omnis, commodi 
            consequatur voluptatibus maxime atque at aspernatur enim earum tenetur velit recusandae? Nostrum ducimus quo dolor autem molestiae 
            vero unde quasi dolores quisquam ut, officia, quae, eveniet labore facilis voluptates! Ipsam ipsum voluptatum consectetur 
            necessitatibus earum."
        ],
        [
            
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Abdillah",
            "content" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo dolorem cum doloribus quia optio aliquam minima? Dolorum 
            nostrum quos vitae ex magni consequuntur ad, ipsa pariatur veniam cum facere accusamus exercitationem neque omnis, commodi 
            consequatur voluptatibus maxime atque at aspernatur enim earum tenetur velit recusandae? Nostrum ducimus quo dolor autem molestiae 
            vero unde quasi dolores quisquam ut, officia, quae, eveniet labore facilis voluptates! Ipsam ipsum voluptatum consectetur 
            necessitatibus earum."
            
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
