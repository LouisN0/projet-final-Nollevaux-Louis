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
            'user_id' => 2,
            'photo' => 'teacher1.jpg',
            'nom' => 'Samuel Delossantos',
            'discipline' => 'Math Teacher',
            'description' => "Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.",
            'biographie' => "<em>Food truck four loko swag, try-hard Williamsburg you probably haven heard of them pork belly bitters.</em><br><br>Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.<br><br>Thundercats Shoreditch polaroid biodiesel put a bird on it. McSweeney's stumptown blog vinyl, pop-up crucifix Tumblr messenger bag hella fap disrupt meh. Cred butcher gluten-free twee Pinterest tofu banh mi, mustache typewriter chia.",
            'telephone' => '910-213-7890',
            'mail' => 'samuel@delossantos.com',
        ]);
        DB::table('teachers')->insert([
            'user_id' => 6,
            'photo' => 'teacher2.jpg',
            'nom' => 'Norbert Hajni',
            'discipline' => 'French Teacher',
            'description' => "Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.",
            'biographie' => "<em>Food truck four loko swag, try-hard Williamsburg you probably haven heard of them pork belly bitters.</em><br><br>Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.<br><br>Thundercats Shoreditch polaroid biodiesel put a bird on it. McSweeney's stumptown blog vinyl, pop-up crucifix Tumblr messenger bag hella fap disrupt meh. Cred butcher gluten-free twee Pinterest tofu banh mi, mustache typewriter chia.",
            'telephone' => '910-213-7890',
            'mail' => 'norbert@gmail.com',
        ]);
        DB::table('teachers')->insert([
            'user_id' => 7,
            'photo' => 'teacher3.jpg',
            'nom' => 'Sharleen Herakles',
            'discipline' => 'Science Teacher',
            'description' => "Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.",
            'biographie' => "<em>Food truck four loko swag, try-hard Williamsburg you probably haven heard of them pork belly bitters.</em><br><br>Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.<br><br>Thundercats Shoreditch polaroid biodiesel put a bird on it. McSweeney's stumptown blog vinyl, pop-up crucifix Tumblr messenger bag hella fap disrupt meh. Cred butcher gluten-free twee Pinterest tofu banh mi, mustache typewriter chia.",
            'telephone' => '910-213-7890',
            'mail' => 'sharleen@gmail.com',
        ]);
        DB::table('teachers')->insert([
            'user_id' => 8,
            'photo' => 'teacher4.jpg',
            'nom' => 'Cassandre Jordane',
            'discipline' => 'Geography Teacher',
            'description' => "Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.",
            'biographie' => "<em>Food truck four loko swag, try-hard Williamsburg you probably haven heard of them pork belly bitters.</em><br><br>Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.<br><br>Thundercats Shoreditch polaroid biodiesel put a bird on it. McSweeney's stumptown blog vinyl, pop-up crucifix Tumblr messenger bag hella fap disrupt meh. Cred butcher gluten-free twee Pinterest tofu banh mi, mustache typewriter chia.",
            'telephone' => '910-213-7890',
            'mail' => 'cassandre@gmail.com',
        ]);
        DB::table('teachers')->insert([
            'user_id' => 9,
            'photo' => 'teacher5.jpg',
            'nom' => 'Richard Aubin',
            'discipline' => 'Geography Teacher',
            'description' => "Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.",
            'biographie' => "<em>Food truck four loko swag, try-hard Williamsburg you probably haven heard of them pork belly bitters.</em><br><br>Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.<br><br>Thundercats Shoreditch polaroid biodiesel put a bird on it. McSweeney's stumptown blog vinyl, pop-up crucifix Tumblr messenger bag hella fap disrupt meh. Cred butcher gluten-free twee Pinterest tofu banh mi, mustache typewriter chia.",
            'telephone' => '910-213-7890',
            'mail' => 'richard@gmail.com',
        ]);
        DB::table('teachers')->insert([
            'user_id' => 10,
            'photo' => 'teacher6.jpg',
            'nom' => 'Edgar David',
            'discipline' => 'Geography Teacher',
            'description' => "Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.",
            'biographie' => "<em>Food truck four loko swag, try-hard Williamsburg you probably haven heard of them pork belly bitters.</em><br><br>Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan McSweeney's.<br><br>Thundercats Shoreditch polaroid biodiesel put a bird on it. McSweeney's stumptown blog vinyl, pop-up crucifix Tumblr messenger bag hella fap disrupt meh. Cred butcher gluten-free twee Pinterest tofu banh mi, mustache typewriter chia.",
            'telephone' => '910-213-7890',
            'mail' => 'edgar@gmail.com',
        ]);
    }
}
