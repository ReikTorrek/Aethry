<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubRacesTableSeeder extends Seeder
{
    protected $subRaces = [
        ['race_id' => 1, 'value' => 'Высший эльф'],
        ['race_id' => 1, 'value' => 'Лесной эльф'],
        ['race_id' => 1, 'value' => 'Дроу'],
        ['race_id' => 2, 'value' => 'Тифлинг демонов'],
        ['race_id' => 2, 'value' => 'Тифлинг грязнокровка'],
        ['race_id' => 3, 'value' => 'Зверолюд птица'],
        ['race_id' => 3, 'value' => 'Зверолюд хищник'],
        ['race_id' => 3, 'value' => 'Травоядный зверолюд'],
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->subRaces as $subRace) {
            DB::table('sub_races')->insert($subRace);
        }
    }
}
