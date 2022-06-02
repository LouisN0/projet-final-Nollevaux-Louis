<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriecourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie_cour')->insert([
            'cour_id' => '1',
            'categorie_id' => '1',
        ]);
        DB::table('categorie_cour')->insert([
            'cour_id' => '2',
            'categorie_id' => '2',
        ]);
        DB::table('categorie_cour')->insert([
            'cour_id' => '3',
            'categorie_id' => '1',
        ]);
        DB::table('categorie_cour')->insert([
            'cour_id' => '4',
            'categorie_id' => '2',
        ]);
        DB::table('categorie_cour')->insert([
            'cour_id' => '5',
            'categorie_id' => '2',
        ]);
    }
}
