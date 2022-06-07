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
        DB::table('users')->insert([
            'nom' => 'Norbert Hajni',
            'email' => 'norbert@gmail.com',
            'password' => Hash::make('norbert@gmail.com'),
            'role_id' => 2,
            'image' => 'default.jpg',
        ]);
        DB::table('users')->insert([
            'nom' => 'Sharleen Herakles',
            'email' => 'sharleen@gmail.com',
            'password' => Hash::make('sharleen@gmail.com'),
            'role_id' => 2,
            'image' => 'default.jpg',
        ]);
        DB::table('users')->insert([
            'nom' => 'Cassandre Jordane',
            'email' => 'cassandre@gmail.com',
            'password' => Hash::make('cassandre@gmail.com'),
            'role_id' => 2,
            'image' => 'default.jpg',
        ]);
        DB::table('users')->insert([
            'nom' => 'Richard Aubin',
            'email' => 'richard@gmail.com',
            'password' => Hash::make('richard@gmail.com'),
            'role_id' => 2,
            'image' => 'default.jpg',
        ]);
        DB::table('users')->insert([
            'nom' => 'Edgar David',
            'email' => 'edgar@gmail.com',
            'password' => Hash::make('edgar@gmail.com'),
            'role_id' => 2,
            'image' => 'default.jpg',
        ]);
    }
}
