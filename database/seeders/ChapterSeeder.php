<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chapters')->insert([
            [
                'cartoon_id' => 1,
                'title' => 'Глава 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cartoon_id' => 1,
                'title' => 'Глава 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cartoon_id' => 1,
                'title' => 'Глава 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
