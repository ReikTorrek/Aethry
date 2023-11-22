<?php

namespace App\Livewire;

use App\Models\Character;
use App\Models\CharacterTrait;
use App\Models\Race;
use App\Models\SubRace;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;


class CharacterCreate extends Component
{
    public array $races;
    public array $subRaces;
    public array $subRace = [];

    public int $age;
    public int $level = 1;
    public int $currentExp = 0;
    public int $expToLevel = 10;
    public int $summaryPoints = 32;

    public string $name = '';
    public string $race = '';
    public string $sub_race = '';
    public string $traits = '';
    public string $response = '';

    public function boot()
    {
        $this->races = Race::all()->all();
    }
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.character-create');
    }

    public function getSubRace()
    {
        $this->subRace = SubRace::where('race_id', $this->race)->get()->all();
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
            if ($characterTrait) {
                $this->response = $validated['name'];
            }
        }
    }
}
