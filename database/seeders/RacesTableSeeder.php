<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RacesTableSeeder extends Seeder
{
    protected array $races = [
      1 => 'Эльф',
      2 => 'Тифлинг',
      3 => 'Зверолюд',
      4 => 'Дварф',
      5 => 'Гном',
      6 => 'Человек',
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->races as $key => $race) {
            DB::table('races')->insert([
                'id' => $key,
                'value' => $race,
            ]);
        }
    }
}
