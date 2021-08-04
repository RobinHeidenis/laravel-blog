<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Post::create([
            'title' => 'My First Post',
            'slug' => 'my-first-post',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa delectus, deserunt dicta enim expedita id itaque labore magnam modi numquam omnis, perferendis porro quasi, rerum sapiente sit sunt veniam voluptate.</p>',
            'excerpt' => 'This is my very first post, come and look!',
            'category_id' => 1
        ]);

        Post::create([
            'title' => 'My Second Post',
            'slug' => 'my-second-post',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa delectus, deserunt dicta enim expedita id itaque labore magnam modi numquam omnis, perferendis porro quasi, rerum sapiente sit sunt veniam voluptate.</p>',
            'excerpt' => 'This is my second post, come and look!',
            'category_id' => 2
        ]);

        Post::create([
            'title' => 'My Third Post',
            'slug' => 'my-third-post',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa delectus, deserunt dicta enim expedita id itaque labore magnam modi numquam omnis, perferendis porro quasi, rerum sapiente sit sunt veniam voluptate.</p>',
            'excerpt' => 'This is my third post, come and look!',
            'category_id' => 0
        ]);

        Post::create([
            'title' => 'My Fourth Post',
            'slug' => 'my-fourth-post',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa delectus, deserunt dicta enim expedita id itaque labore magnam modi numquam omnis, perferendis porro quasi, rerum sapiente sit sunt veniam voluptate.</p>',
            'excerpt' => 'This is my latest post, come and look!',
            'category_id' => 0
        ]);
    }
}
