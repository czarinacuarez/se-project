<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
   
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'nuweek@gmail.com',
            'password' => Hash::make('nuweek2024'),
        ]);

        DB::table('sports')->insert([
            'sports_category' => 'Mens Basketball',
        ]);

        DB::table('sports')->insert([
            'sports_category' => 'Womens Basketball',
        ]);


        DB::table('sports')->insert([
            'sports_category' => 'Bowling',
        ]);

        DB::table('sports')->insert([
            'sports_category' => 'Mens Volleyball',
        ]);

        DB::table('sports')->insert([
            'sports_category' => 'Womens Volleyball',
        ]);

        DB::table('sports')->insert([
            'sports_category' => 'Table Tennis',
        ]);

        DB::table('sports')->insert([
            'sports_category' => 'Esports: Call of Duty',
        ]);

        DB::table('sports')->insert([
            'sports_category' => 'Esports: Mobile Legends',
        ]);

        DB::table('sports')->insert([
            'sports_category' => 'Esports: Valorant',
        ]);

        DB::table('sports')->insert([
            'sports_category' => 'Chess',
        ]);

        DB::table('sports')->insert([
            'sports_category' => 'Rubiks Cube',
        ]);


        DB::table('contest')->insert([
            'contest_category' => 'Battle of the Bands',
        ]);

        DB::table('contest')->insert([
            'contest_category' => 'Pet Fashion Show',
        ]);

        DB::table('contest')->insert([
            'contest_category' => 'Battle of the Brains',
        ]);

        DB::table('contest')->insert([
            'contest_category' => 'Dance Contest',
        ]);
        
        DB::table('contest')->insert([
            'contest_category' => 'Poster Making Contest',
        ]);

        DB::table('contest')->insert([
            'contest_category' => 'Peerlympics',
        ]);

        DB::table('contest')->insert([
            'contest_category' => 'Shelfie',
        ]);

        DB::table('contest')->insert([
            'contest_category' => 'Debate',
        ]);
    }
}
