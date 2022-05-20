<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slides')->insert([
            'image1' => 'cours1.jpg',
            'image2' => 'cours2.jpg',
            'image3' => 'cours3.jpg',
            'image4' => 'cours4.jpg',
        ]);
        //
    }
}
