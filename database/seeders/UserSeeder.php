<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'nom' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@gmail.com'),
            'role_id' => 1,
            'image' => 'default.jpg',
        ]);
        DB::table('users')->insert([
            'nom' => 'Samuel Delossantos',
            'email' => 'samuel@gmail.com',
            'password' => Hash::make('samuel@gmail.com'),
            'role_id' => 2,
            'image' => 'default.jpg',
        ]);
        DB::table('users')->insert([
            'nom' => 'writer',
            'email' => 'writer@gmail.com',
            'password' => Hash::make('writer@gmail.com'),
            'role_id' => 3,
            'image' => 'default.jpg',
        ]);
        DB::table('users')->insert([
            'nom' => 'membre',
            'email' => 'lounol.co@gmail.com',
            'password' => Hash::make('lounol.co@gmail.com'),
            'role_id' => 4,
            'image' => 'default.jpg',
        ]);
        DB::table('users')->insert([
            'nom' => 'membre2',
            'email' => 'member@gmail.com',
            'password' => Hash::make('member@gmail.com'),
            'role_id' => 4,
            'image' => 'default.jpg',
        ]);
        //
    }
}
