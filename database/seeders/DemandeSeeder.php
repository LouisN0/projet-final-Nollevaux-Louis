<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DemandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('demandes')->insert([
            'from' => '',
            'to' => '',
            'contenu' => '',
            'status' => '',
            'date' => '',
        ]);
        //
    }
}
