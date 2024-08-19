<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            [
                'name' => 'Манга',
                'slug' => 'manga',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Манхва',
                'slug' => 'manhwa',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Маньхуа',
                'slug' => 'manhua',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
        ]);
    }
}
