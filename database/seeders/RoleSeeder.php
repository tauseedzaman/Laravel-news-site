<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list_or_roles  =['admin','author','user'];
        foreach($list_or_roles as $role){
            role::create(['name' => $role]);
        }
    }
}
