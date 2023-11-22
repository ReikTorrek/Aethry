<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacteristicsSeeder extends Seeder
{
    protected array $characteristics = [
      ['name' => 'Сила', 'base_value' => 8],
      ['name' => 'Ловкость', 'base_value' => 8],
      ['name' => 'Выносливость', 'base_value' => 8],
      ['name' => 'Интеллект', 'base_value' => 8],
      ['name' => 'Восприятие', 'base_value' => 8],
      ['name' => 'Мудрость', 'base_value' => 8],
      ['name' => 'Харизма', 'base_value' => 8],
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->characteristics as $characteristic) {
            DB::table('characteristics')->insert($characteristic);
        }
    }
}
