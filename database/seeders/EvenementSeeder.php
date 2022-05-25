<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvenementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evenements')->insert([
            'image' => 'events-1.jpg',
            'lieu' => 'Johnny Lane<br>Milwaukee WI 532',
            'date' => 'Dec 18 - Dec 28<br>Monday 8am - 12am',
            'start' => '18<span>Dec',
            'titre' => 'The name of a great<br>band',
            'description' => 'Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap tattooed.',
        ]);
        DB::table('evenements')->insert([
            'image' => 'events-1.jpg',
            'lieu' => 'Johnny Lane<br>Milwaukee WI 532',
            'date' => 'Dec 18 - Dec 28<br>Monday 8am - 12am',
            'start' => '18<span>Dec',
            'titre' => 'The name of a great<br>band',
            'description' => 'Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap tattooed.',
        ]);
        //
    }
}
