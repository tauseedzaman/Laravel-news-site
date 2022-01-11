<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if(User::count() == 0){
            $this->call([
                RoleSeeder::class
            ]);
            User::create([
                'name' => "tauseedzaman",
                'username' => "tauseedzaman",
                'role_id' => 1,
                'email' => "tauseedzaman@test.com",
                'password' => Hash::make('password')
            ]);
        }

        // \App\Models\User::factory(10)->create();
    }
}
