<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Boleh diisi
    protected $fillable = ['title', 'excerpt', 'body'];
    /* Format
    'title' => '',
    'excerpt' => '',
    'body' => '',
    */

    //Gaboleh Diisi
    protected $guarded = ['id'];

}
