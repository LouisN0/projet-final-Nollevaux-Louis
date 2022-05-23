<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socials')->insert([
            'facebook' => '#',
            'twitter' => '#',
            'dribble' => '#',
            'insta' => '#',
            'skype' => 'samueldelossantos1',
            'linkedink' => '#',
            'teacher_id' => 1,
        ]);
        //
    }
}
