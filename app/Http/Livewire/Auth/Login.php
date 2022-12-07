<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{

    public $email;
    public $password;

    /**
     * Handle an authentication attempt.
     */
    public function authenticate()
    {
        $credentials = $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required','min:5'],
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home'));
        }

        $this->addError('password','Las credenciales no coinciden');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
