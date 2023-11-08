<?php

namespace App\Livewire;

use App\Models\Character;
use App\Models\CharacterTrait;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;


class CharacterCreate extends Component
{
    public array $races = [
        'Человек',
        'Эльф',
        'Гном',
        'Дварф',
        'Тифлинг',
        'Зверолюд',
    ];
    public array $subRaces = [
        'Человек' => [],
        'Эльф' => ['Высший эльф', 'Лесной эльф', 'Дроу'],
        'Гном' => [],
        'Дварф' => [],
        'Тифлинг' => ['Тифлинг демонов', 'Тифлинг грязнокровка'],
        'Зверолюд' => ['Зверолюд птица', 'Зверолюд хищник', 'Травоядный зверолюд'],
    ];
    public array $subRace = [];

    public int $age;
    public int $level = 1;
    public int $current_exp = 0;
    public int $exp_to_level = 10;

    public string $name = '';
    public string $race = '';
    public string $sub_race = '';
    public string $traits = '';
    public string $response = '';

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.character-create');
    }

    public function getSubRace()
    {
        $this->subRace = $this->subRaces[$this->race];
    }

    public function createCharacter() {
        $validated = $this->validate([
            'name' => 'required',
            'age' => '',
            'race' => 'required',
            'sub_race' => '',
            'level' => 'int|required',
            'current_exp' => 'int|required',
            'exp_to_level' => 'int|required',
            'traits' => '',
        ]);
        $validated['user_id'] = Auth::user()->id;
        $character = Character::create($validated);
        if ($character) {
            $characterTrait = CharacterTrait::create(['user_id' => $validated['user_id'], 'character_id' => $character->id, 'value' => $this->traits]);
            $this->response = $validated['name'];
        }
    }
}
