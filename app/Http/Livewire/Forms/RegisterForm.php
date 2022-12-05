<?php

namespace App\Http\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegisterForm extends Component
{
    public $email;
    public $password;
    public $success = null;


    protected $rules = [
        'email' => 'required|unique:users',
        'password' => 'required|min:8'
    ];

    public function render()
    {
        return view('livewire.forms.register-form');
    }


    public function handleRegister()
    {
        $this->validate();

        $user = User::create([
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        if ($user) {
            $this->success = 'User registered successfully';
            $this->email = null;
            $this->password = null;
        }

    }
}
