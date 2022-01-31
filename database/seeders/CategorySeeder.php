<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoies = ['HTML','CSS','JS','PHP','PYTHON','LARAVEL'];
        if (category::count() == 0) {
            foreach($categoies as $cat){
            category::create(['name' =>$cat]);
        }
    }
    }
}
