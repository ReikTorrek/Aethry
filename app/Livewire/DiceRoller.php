<?php

namespace App\Livewire;

use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;

class DiceRoller extends Component
{
    public array $diceRanks = [
        2 => '1d2',
        4 => '1d4',
        6 => '1d6',
        8 => '1d8',
        10 => '1d10',
        12 => '1d12',
        20 => '1d20',
        100 => '1d100',
    ];
    public array $history = [];
    public int $diceResult;
    public int $mod = 0;

    public function render()
    {
        return view('livewire.dice-roller')->layout('layouts.app');
    }
    public function rollDice($rank)
    {
        $this->diceResult = rand(1, $rank);
        $this->history[$this->diceRanks[$rank]][] = $this->diceResult;
    }
    public function clearAll()
    {
        $this->history = [];
    }
}
