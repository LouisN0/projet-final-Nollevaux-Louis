<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'photo' => 'teacher1.jpg',
            'nom' => 'Samuel Delossantos',
            'discipline' => 'Math Teacher',
            'description' => "Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.",
            'biographie' => "<em>Food truck four loko swag, try-hard Williamsburg you probably haven heard of them pork belly bitters.</em><br><br>Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.<br><br>Thundercats Shoreditch polaroid biodiesel put a bird on it. McSweeney's stumptown blog vinyl, pop-up crucifix Tumblr messenger bag hella fap disrupt meh. Cred butcher gluten-free twee Pinterest tofu banh mi, mustache typewriter chia.",
            'telephone' => '910-213-7890',
            'mail' => 'samuel@delossantos.com',
        ]);
        //
    }
}
