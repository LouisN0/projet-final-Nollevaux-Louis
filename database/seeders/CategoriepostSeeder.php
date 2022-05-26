<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriepostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie_post')->insert([
            'post_id' => '1',
            'categorie_id' => '1',
        ]);
        DB::table('categorie_post')->insert([
            'post_id' => '2',
            'categorie_id' => '2',
        ]);
    }
}
