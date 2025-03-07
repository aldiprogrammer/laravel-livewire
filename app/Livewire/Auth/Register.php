<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $username;
    public $email;
    public $password;
    public $password_confirmation;

    public function render()
    {
        return view('livewire.auth.register');
    }

    function register()
    {
        $this->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        $add = new User();
        $add->name = $this->name;
        $add->username = $this->username;
        $add->email = $this->email;
        $add->password = Hash::make($this->password);

        $add->save();
        return $this->redirect('/login', navigate: true);
    }
}
