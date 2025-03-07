<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{

    public $username = '';
    public $password = '';

    public function render()
    {
        return view('livewire.auth.login');
    }

    function actlogin()
    {
        $this->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ]);
    }
}
