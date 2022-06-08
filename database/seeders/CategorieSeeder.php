<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'nom' => 'education',
        ]);
        DB::table('categories')->insert([
            'nom' => 'learning',
        ]);
        DB::table('categories')->insert([
            'nom' => 'math',
        ]);
        DB::table('categories')->insert([
            'nom' => 'natation',
        ]);
        DB::table('categories')->insert([
            'nom' => 'sport',
        ]);
        
        //
    }
}
