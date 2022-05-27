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
            'nom' => 'a',
            'email' => 'a@gmail.com',
            'password' => Hash::make('a@gmail.com'),
            'role_id' => 1,
            'image' => 'default.jpg',
        ]);
        DB::table('users')->insert([
            'nom' => 'b',
            'email' => 'b@gmail.com',
            'password' => Hash::make('b@gmail.com'),
            'role_id' => 1,
            'image' => 'default.jpg',
        ]);
        DB::table('users')->insert([
            'nom' => 'c',
            'email' => 'c@gmail.com',
            'password' => Hash::make('c@gmail.com'),
            'role_id' => 1,
            'image' => 'default.jpg',
        ]);
        //
    }
}
