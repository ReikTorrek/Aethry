<?php

namespace App\Livewire;

use App\Models\Character;
use Livewire\Component;

class CharacterList extends Component
{
    public $character;
    public $characterTraits;
    public function mount($id)
    {
        $this->character = Character::find($id);
        dd($this->character);
    }
    public function render()
    {
        return view('livewire.character-list');
    }
}
