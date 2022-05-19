<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'image' => 'banner1.jpg',
            'titre' => 'Are you ready to study ?<br>We have the',
            'motsCle' => 'Solution',
            'description' => 'Nunc eget tempor neque. Aenean non ex sed nibh euismod<br>ornare. Nam congue nisi purus, sed luctus risus.',
            'btn' => '#',
        ]);
        DB::table('banners')->insert([
            'image' => 'banner2.jpg',
            'titre' => 'Next year more intresting!<br>Check next',
            'motsCle' => 'Features',
            'description' => 'Nunc eget tempor neque. Aenean non ex sed nibh euismod<br>ornare. Nam congue nisi purus, sed luctus risus.',
            'btn' => '#',
        ]);
        //
    }
}
