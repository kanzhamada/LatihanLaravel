<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Boleh diisi
    protected $fillable = ['title', 'slug', 'excerpt', 'body', 'user_id'];
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

    public function Author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}