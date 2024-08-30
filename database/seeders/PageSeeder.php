<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pages')->insert([
            [
                'chapter_id' => 1,
                'url' => 'test1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => 1,
                'url' => 'test2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'chapter_id' => 1,
                'url' => 'test3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
