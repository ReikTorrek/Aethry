<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public string $name;
    public string $email;
    public string $password;
    public string $repeat_password;
    public string $response = '';

    public function render()
    {
        return view('livewire.register')->layout('layouts.app');
    }

    public function register()
    {
        $validate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3',
        ]);
        if ($this->password == $this->repeat_password) {
            $this->response = '';
            $isUserExist = User::where('email', $this->email)->first();
            if (!$isUserExist) {
                User::create($validate);
                if (Auth::attempt($validate)) {
                    return redirect('/profile');
                }
                return redirect('/');
            } else {
                $this->response = 'Такой пользователь уже существует';
            }
        } else {
            $this->response = 'Пароли не совпадают';
        }
    }
}
