<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create(['name' => 'Robin Heidenis']);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $hobbies = Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies'
        ]);

        Post::create([
            'title' => 'My First Post',
            'slug' => 'my-first-post',
            'excerpt' => '<p>This is my very first post, come and look!</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa delectus, deserunt dicta enim expedita id itaque labore magnam modi numquam omnis, perferendis porro quasi, rerum sapiente sit sunt veniam voluptate.</p>',
            'category_id' => $work->id,
            'user_id' => $user->id
        ]);

        Post::create([
            'title' => 'My Second Post',
            'slug' => 'my-second-post',
            'excerpt' => '<p>This is my second post, come and look!</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa delectus, deserunt dicta enim expedita id itaque labore magnam modi numquam omnis, perferendis porro quasi, rerum sapiente sit sunt veniam voluptate.</p>',
            'category_id' => $personal->id,
            'user_id' => $user->id
        ]);

        Post::create([
            'title' => 'My Third Post',
            'slug' => 'my-third-post',
            'excerpt' => '<p>This is my third post, come and look!</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa delectus, deserunt dicta enim expedita id itaque labore magnam modi numquam omnis, perferendis porro quasi, rerum sapiente sit sunt veniam voluptate.</p>',
            'category_id' => $hobbies->id,
            'user_id' => $user->id
        ]);

        Post::create([
            'title' => 'My Fourth Post',
            'slug' => 'my-fourth-post',
            'excerpt' => '<p>This is my latest post, come and look!</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa delectus, deserunt dicta enim expedita id itaque labore magnam modi numquam omnis, perferendis porro quasi, rerum sapiente sit sunt veniam voluptate.</p>',
            'category_id' => $personal->id,
            'user_id' => $user->id
        ]);
    }
}
