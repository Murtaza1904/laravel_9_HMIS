<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    // public User $user;
    public $email,$password;

    protected $rules = [
        'email' => 'required',
        'password' => 'required',
    ];

    public function render()
    {
        return view('livewire.login')->layout('layouts.auth');
    }

    public function login()
    {
        $this->validate();
        if(Auth::attempt(['email' => $this->email, 'password' => $this->password]))
        {
            return to_route('patients');
        }
        else{
            session()->flash('error','Invalid login attemp');
        }
    }

    public function logout()
    {
        Auth::logout();
        return to_route('login');
    }

}
