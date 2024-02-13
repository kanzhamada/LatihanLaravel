<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Kanz',
            'email' => 'Kanz@example.com',
            'password' => bcrypt('123')
        ]);

        User::create([
            'name' => 'Abdillah',
            'email' => 'Abdillah@example.com',
            'password' => bcrypt('456')
        ]);

        User::create([
            'name' => 'Hamada',
            'email' => 'hamada@example.com',
            'password' => bcrypt('789')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, officia.',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, officia.',
            'author_id' => 1,
            'category_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, officia.',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, officia.',
            'author_id' => 3,
            'category_id' => 2,
        ]);

        Post::create([
            'title' => 'Judul Post Ketiga',
            'slug' => 'judul-post-ketiga',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, officia.',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, officia.',
            'author_id' => 2,
            'category_id' => 2,
        ]);

        Post::create([
            'title' => 'Judul Post Keempat',
            'slug' => 'judul-post-keempat',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, officia.',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, officia.',
            'author_id' => 3,
            'category_id' => 1,
        ]);
    }
}
