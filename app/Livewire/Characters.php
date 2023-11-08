<?php

namespace App\Livewire;

use App\Models\Character;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Characters extends Component
{
    #[Layout('layouts.app')]
    public $characters;

    public function mount()
    {
        $this->characters = Character::where('user_id', Auth::user()->id)->get();
    }
    public function render()
    {
        return view('livewire.characters');
    }

    public function deleteCharacter($id, $key)
    {
        unset($this->characters[$key]);
        Character::where('id', $id)->delete();
    }
}
