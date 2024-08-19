<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('titles')->insert([
            [
                'type_id' => 1,
                'title' => 'Волк в доме',
                'description' => 'Интерсный сюжет и волки милые',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_id' => 2,
                'title' => 'Убить сталкера',
                'description' => 'Не лезь туда, оно сожрет тебя!!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_id' => 3,
                'title' => 'Серый кардинал',
                'description' => 'Политические игрища и ролевые игрища',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_id' => 2,
                'title' => 'Банк крови',
                'description' => 'Тут сосут кровь и не только хехе....',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
//        Title::factory(2)->create();
    }
}
