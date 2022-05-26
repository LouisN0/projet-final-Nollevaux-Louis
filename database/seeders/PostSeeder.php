<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'image' => 'news-classic-6.jpg',
            'titre' => 'New university finder: compare',
            'texte' => "Church-key ugh sriracha slow-carb, +1 you probably haven't heard of them put a bird on it single-origin coffee. Pork belly irony chia, fann pack taxidermy Intelligentsia Pitchfork cliche tote bag stumptown authentic umami asymetrical. Bitters Distillery mixtape 90's Portland Brooklyn. Sriracha selfies gluten-free, wolf 8-bit blog Pinterest occupy Marfa seitan narwhal taxidermy sustainable DIY bespoke. Farm-to-table Odd Future raw denim leggings, Pitchfork actually cray health goth Pinterest hella Intelligentsia. Narwhal pug kogi, 3 wolf moon seitan chambray normcore swag VHS farm-to-table occupy High Life Schlitz. Skateboard Pinterest Vice Shoreditch gentrify fanny pack. Meggings street art fingerstache Neutra Kickstarter. Ennui small batch migas occupy, plaid typewriter jean shorts paleo.<br><br>Sriracha meditation Pitchfork, literally ugh whatever fap actually tote bag gentrify. Next level sartorial single-origin coffee, banjo drinking vinegar Godard meditation McSweeney's beard occupy hella American Apparel letterpress.<br><br>Vice pour-over banjo keffiyeh. Raw denim Kickstarter 8-bit Odd Future street art Carles. Synth cold-pressed master cleanse, next level aesthetic Helvetica Austin banh mi squid pickled. Actually fanny pack slow-carb stumptown pug, blog street art Schlitz Carles. Chambray kitsch biodiesel, cred Schlitz banjo readymade mumblecore.",
            'date' => '7 Oct 2015',
        ]);
        DB::table('posts')->insert([
            'image' => 'news-classic-6.jpg',
            'titre' => 'YOLO',
            'texte' => "Church-key ugh sriracha slow-carb, +1 you probably haven't heard of them put a bird on it single-origin coffee. Pork belly irony chia, fann pack taxidermy Intelligentsia Pitchfork cliche tote bag stumptown authentic umami asymetrical. Bitters Distillery mixtape 90's Portland Brooklyn. Sriracha selfies gluten-free, wolf 8-bit blog Pinterest occupy Marfa seitan narwhal taxidermy sustainable DIY bespoke. Farm-to-table Odd Future raw denim leggings, Pitchfork actually cray health goth Pinterest hella Intelligentsia. Narwhal pug kogi, 3 wolf moon seitan chambray normcore swag VHS farm-to-table occupy High Life Schlitz. Skateboard Pinterest Vice Shoreditch gentrify fanny pack. Meggings street art fingerstache Neutra Kickstarter. Ennui small batch migas occupy, plaid typewriter jean shorts paleo.<br><br>Sriracha meditation Pitchfork, literally ugh whatever fap actually tote bag gentrify. Next level sartorial single-origin coffee, banjo drinking vinegar Godard meditation McSweeney's beard occupy hella American Apparel letterpress.<br><br>Vice pour-over banjo keffiyeh. Raw denim Kickstarter 8-bit Odd Future street art Carles. Synth cold-pressed master cleanse, next level aesthetic Helvetica Austin banh mi squid pickled. Actually fanny pack slow-carb stumptown pug, blog street art Schlitz Carles. Chambray kitsch biodiesel, cred Schlitz banjo readymade mumblecore.",
            'date' => '7 Oct 2006',
        ]);
        //
    }
}
