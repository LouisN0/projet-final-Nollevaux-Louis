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
            'facebook' => 'test',
            'twitter' => '#',
            'dribble' => '#',
            'insta' => '#',
            'skype' => 'samueldelossantos1',
            'linkedink' => '#',
            'teacher_id' => 1,
        ]);
        DB::table('socials')->insert([
            'facebook' => 'test',
            'twitter' => '#',
            'dribble' => '#',
            'insta' => '#',
            'skype' => 'norberthajni1',
            'linkedink' => '#',
            'teacher_id' => 2,
        ]);
        DB::table('socials')->insert([
            'facebook' => 'test',
            'twitter' => '#',
            'dribble' => '#',
            'insta' => '#',
            'skype' => 'sharleenherakles1',
            'linkedink' => '#',
            'teacher_id' => 3,
        ]);
        DB::table('socials')->insert([
            'facebook' => 'test',
            'twitter' => '#',
            'dribble' => '#',
            'insta' => '#',
            'skype' => 'cassandrejordane1',
            'linkedink' => '#',
            'teacher_id' => 4,
        ]);
        DB::table('socials')->insert([
            'facebook' => 'test',
            'twitter' => '#',
            'dribble' => '#',
            'insta' => '#',
            'skype' => 'richardaubin1',
            'linkedink' => '#',
            'teacher_id' => 5,
        ]);
        DB::table('socials')->insert([
            'facebook' => 'test',
            'twitter' => '#',
            'dribble' => '#',
            'insta' => '#',
            'skype' => 'edgardavid1',
            'linkedink' => '#',
            'teacher_id' => 6,
        ]);
    }
}
