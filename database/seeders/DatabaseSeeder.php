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
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(7)->create();
        // User::create([
        //     'name' => 'Kanz',
        //     'email' => 'Kanz@example.com',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Abdillah',
        //     'email' => 'Abdillah@example.com',
        //     'password' => bcrypt('456')
        // ]);

        // User::create([
        //     'name' => 'Hamada',
        //     'email' => 'hamada@example.com',
        //     'password' => bcrypt('789')
        // ]);

        // Category::factory(7)->create();
        Category::create([
            'name' => 'Art',
            'slug' => 'art'
        ]);

        Category::create([
            'name' => 'Football',
            'slug' => 'football'
        ]);

        Category::create([
            'name' => 'Nature',
            'slug' => 'nature'
        ]);

        Category::create([
            'name' => 'Politics',
            'slug' => 'politics'
        ]);

        Category::create([
            'name' => 'Library',
            'slug' => 'library'
        ]);

        Category::create([
            'name' => 'Tech',
            'slug' => 'tech'
        ]);

        Category::create([
            'name' => 'Food',
            'slug' => 'food'
        ]);

        Post::factory(21)->create();
        // Post::create([
        //     'title' => 'Judul Post Pertama',
        //     'slug' => 'judul-post-pertama',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, officia.',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, officia.',
        //     'author_id' => 1,
        //     'category_id' => 1,
        // ]);

    }
}
