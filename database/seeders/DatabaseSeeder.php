<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
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
        // \App\Models\User::factory(5)->create();

        Listing::factory(14)->create();
        // Listing::create([
        //     'title' => 'Frontend Developer',
        //     'tags' => 'laravel, vue, tailwind, javascript',
        //     'company' => 'Krusty Krab',
        //     'location' => 'San Francisco, CA',
        //     'email' => 'email2@email.com',
        //     'website' => 'https://www.xyzinc.com',
        //     'description' => 'We are looking for a skilled Frontend Developer to join our team. You will be responsible for implementing user interfaces using laravel, vue, tailwind, and javascript. The ideal candidate should have a solid understanding of frontend development principles and experience in responsive design. If you are passionate about creating beautiful and interactive web experiences, we would love to talk to you.'
        // ]);

        // Listing::create([
        //     'title' => 'Senior Laravel Developer',
        //     'tags' => 'laravel, php, MySQL',
        //     'company' => 'Skynet',
        //     'location' => 'New York, NY',
        //     'email' => 'email2@skynet.com',
        //     'website' => 'https://www.webtechsolutions.com',
        //     'description' => 'We are seeking a Senior Laravel Developer to join our experienced team. As a Senior Laravel Developer, you will be involved in designing and implementing complex web applications using Laravel framework and MySQL database. The ideal candidate should have a deep understanding of Laravel and its ecosystem, along with strong problem-solving and leadership skills. If you are passionate about Laravel development and have a track record of delivering high-quality solutions, we would love to have you on board.'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
