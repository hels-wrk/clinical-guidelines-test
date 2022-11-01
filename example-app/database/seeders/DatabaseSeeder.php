<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        do {
            DB::table('guidelines')->insert([
                'groupName' => 'Respiratory',
                'subject' => 'Vitamin' . Str::random(10),
            ]);

            DB::table('guidelines')->insert([
                'groupName' => 'Respiratory System',
                'subject' => 'Vitamin' . Str::random(10),
            ]);

            DB::table('guidelines')->insert([
                'groupName' => 'Musculoskeletal System',
                'subject' => 'Vitamin' . Str::random(10),
            ]);

            DB::table('guidelines')->insert([
                'groupName' => 'Digestive System',
                'subject' => 'Vitamin' . Str::random(10),
            ]);
            $i++;
        } while ($i < 20);


    }
}
