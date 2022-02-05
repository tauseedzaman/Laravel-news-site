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
        \App\Models\posts::factory()->count(10)->create();

        // if (posts::count() == 0) {
        //     for ($i=0; $i < 10; $i++) {
        //         posts::create([

        //         ]);
        //     }
        // }
    }
}
