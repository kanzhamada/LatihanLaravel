<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Boleh diisi
    protected $fillable = ['title', 'slug', 'author', 'excerpt', 'body', 'author_id'];
    /* Format
    'title' => '',
    'excerpt' => '',
    'body' => '',
    */

    //Gaboleh Diisi
    protected $guarded = ['id'];

    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function Users(){
        return $this->belongsTo(User::class, 'author_id');
    }
}