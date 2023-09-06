<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create default user
        User::create([
            'name' => "Admin",
            'email' => "admin@example.com",
            'password' => Hash::make("password"),
        ]);
    }
}
