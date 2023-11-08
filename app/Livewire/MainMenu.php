<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MainMenu extends Component
{
    public array $menuItems = [
        '/' => 'Главная',
    ];
    public array $unAuthedItems = [
        '/auth' => 'Авторизация',
        '/register' => 'Регистрация',
    ];
    public array $authedItens = [
      '/profile' => 'Профиль',
      '/logout' => 'Выйти'
    ];
    public function mount()
    {
        if (auth()->check()) {
            $this->authedItens['/profile'] = Auth::user()->name;
            foreach ($this->authedItens as $key => $item) {
                $this->menuItems[$key] = $item;
            }
        } else {
            foreach ($this->unAuthedItems as $key => $item) {
                $this->menuItems[$key] = $item;
            }
        }
    }
    public function render()
    {
        return view('livewire.main-menu');
    }
}
