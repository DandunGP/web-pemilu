<?php

namespace Database\Seeders;

use App\Models\Email;
use App\Models\Leader;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'email' => 'test@example.com',
        //     'password' => Hash::make('password')
        // ]);

        User::create([
            'email' => 'adminuser@example.com',
            'password' => Hash::make('useradmin123'),
            'role' => 'Admin',
        ]);

        User::create([
            'email' => 'useruser@example.com',
            'password' => Hash::make('useruser123'),
        ]);

        Leader::create([
            'name' => 'Alip',
            'rationalization' => 'Rationalization 1',
            'photo' => '/public/image/Alip.jpeg',
        ]);

        Leader::create([
            'name' => 'Farhan',
            'rationalization' => 'Rationalization 2',
            'photo' => '/public/image/Farhan.jpeg',
        ]);

        Email::create([
            'email' => 'adminuser@example.com',
        ]);

        Email::create([
            'email' => 'useruser@example.com',
        ]);
    }
}
