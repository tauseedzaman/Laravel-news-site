<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class postsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            $title = $this->faker->sentence();
            return [
                'title' => $title,
                'slug' => Str::slug($title),
                'description' => $this->faker->paragraph(5),
                'image' => "images/shop_09.png",
                'user_id' => function ()
                {
                    return User::factory()->create()->id;
                },
                'category_id' => rand(0,5),
            ];
    }
}
