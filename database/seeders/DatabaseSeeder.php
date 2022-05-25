<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([ 
            PostSeeder::class,
            EvenementSeeder::class,
            TeacherSeeder::class,
            SocialSeeder::class,
            SlideSeeder::class,
            CourSeeder::class,
            ServiceSeeder::class,
            BannerSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            
            
            
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
