<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'adress' => '1020 bruxelles',
            'email' => 'educa@university.com',
            'phone' => '+1 (23) 207 0567 2120',
        ]);
        //
    }
}
