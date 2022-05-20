<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cours')->insert([
            'image' => '',
            'prof_id' => '',
            'prix' => '',
            'titre' => '',
            'description' => '',
            'slide_id' => '',
            'start' => '',
            'temps' => '',
            'niveau' => '',
            'discipline' => '',
            'date' => '',
        ]);
        //
    }
}
