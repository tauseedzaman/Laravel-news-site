<?php

namespace Database\Seeders;

use App\Models\posts;
use Illuminate\Database\Seeder;

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
            posts::create([
                'title' => "Hello this is just a test posts",
                'description' => "Yeah so what's up every body this is going to be a post just for testing our service ",
                'user_id' => 1,
                'category_id' => 1,
            ]);
        }
    }
}
