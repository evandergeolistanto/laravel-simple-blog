<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Evander',
            'username' => 'evander',
            'email' => 'evander@gmail.com',
            'password' => bcrypt('evander0103'),
        ]);
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Jeniva',
        //     'email' => 'jeniva@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Graphics Design',
            'slug' => 'graphics-design',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'title' => 'Post Pertama',
        //     'slug' => 'post-pertama',
        //     'excerpt' => 'Post Pertama ini adalah anugerah bagi para pembaca yang ingin mengetahui tentang artikel ini.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.'
        // ]);
        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Post Kedua',
        //     'slug' => 'post-kedua',
        //     'excerpt' => 'Post kedua ini adalah anugerah bagi para pembaca yang ingin mengetahui tentang artikel ini.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.'
        // ]);
        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'title' => 'Post Ketiga',
        //     'slug' => 'post-ketiga',
        //     'excerpt' => 'Post ketiga ini adalah anugerah bagi para pembaca yang ingin mengetahui tentang artikel ini.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quos.'
        // ]);
    }
}
