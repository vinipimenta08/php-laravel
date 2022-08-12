<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRoot = User::create([
            'name' => 'admin',
            'email' => 'admin@phplaravel.com',
            'password' => bcrypt(env('DB_PASSWORD')),
            'active' => 1
        ]);




    }
}
