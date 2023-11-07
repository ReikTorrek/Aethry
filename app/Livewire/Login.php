<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public string $email;
    public string $password;
    public string $response;

    public function render()
    {
        return view('livewire.auth')->layout('layouts.app');
    }

    public function login(Request $request)
    {
        $credentials = $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('profile');
        } else {
            dd(Auth::attempt($credentials));
        }
    }
}
