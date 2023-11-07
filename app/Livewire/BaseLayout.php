<?php

namespace App\Livewire;

use Livewire\Component;

class BaseLayout extends Component
{
    public function render()
    {
        return view('livewire.base-layout')->layout('layouts.app');
    }
}
