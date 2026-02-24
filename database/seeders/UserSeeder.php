<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
          [
            'name' => 'Muhammad Ramadhan Prinada',
            'username' => 'pemula9aming',
            'email' => 'ramadhanpmuhammad@gmail.com',
            'phone_number' => '0857-1070-5935',
            'role' => 'owner',
            'profile_photo' => '',
            'password' => Hash::make('password'),
            'joined_at' => now(),
          ],
          
          [
            'name' => 'Yumiati',
            'username' => 'Ma Yuyum',
            'email' => 'yumiati@gmail.com',
            'phone_number' => '',
            'role' => 'investor',
            'profile_photo' => '',
            'password' => Hash::make('password'),
            'joined_at' => now(),
          ],

          [
            'name' => 'Wily Ahmad Fauzan',
            'username' => 'sanemiu',
            'email' => 'wily@gmail.com',
            'phone_number' => '',
            'role' => 'admin',
            'profile_photo' => '',
            'password' => Hash::make('password'),
            'joined_at' => now(),
          ],
          [
            'name' => 'Rafly Eryan Azis',
            'username' => 'roesdi',
            'email' => 'rafly@gmail.com',
            'phone_number' => '',
            'role' => 'admin',
            'profile_photo' => '',
            'password' => Hash::make('password'),
            'joined_at' => now(),
          ],
        ];

        foreach ($users as $key => $value)
        {
            User::create($value);        
        }
    }
}