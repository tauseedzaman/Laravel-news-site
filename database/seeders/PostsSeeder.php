<?php

namespace Database\Seeders;

use App\Models\posts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (posts::count() == 0) {
            for ($i=0; $i < 10; $i++) {
                posts::create([
                    'title' => "Hello this is just a test posts",
                    'slug' => str::slug("Hello this is just a test posts-".$i),
                    'description' => "Yeah so what's up every body this is going to be a post just for testing our service ",
                    'image' => "images/shop_09.jpg",
                    'user_id' => 1,
                    'category_id' => rand(0,5),
                ]);
            }
        }
    }
}
