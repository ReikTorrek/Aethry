<?php

namespace App\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Livewire\Attributes\Layout;
use Livewire\Component;

class BaseLayout extends Component
{
    public bool $isAuthed = false;

    public function mount()
    {
        $this->isAuthed = auth()->check();
    }

    #[Layout('layouts.app')]
    public function render(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.base-layout');
    }

    public function redirectUser($url, $navigate = false): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        return redirect($url);
    }
}
