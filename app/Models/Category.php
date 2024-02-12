<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /* 
        Mengisi data menggunakan 'Create'
        <nama model>::create(
            [
                'nama kolom 1' => 'isi kolom 1',
                'nama kolom 2' => 'isi kolom 2
            ]
        )
    */

    public function Posts(){
        return $this->hasMany(Post::class);
    }
}
