<?php

namespace App\Http\Livewire\MyData;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Password extends Component
{

    public $password;
    public $confirmation;

    protected $rules = [
        'password' => ['required', 'min:5',],
        'confirmation' => ['required', 'min:3', 'same:password',],
    ];

    protected $messages = [
        'required' => 'Este campo es requerido',
        'min' => 'Al menos :min caracteres',
        'max' => 'Máximo :max caracteres',
        'same' => 'Los caracteres deben ser iguales',
    ];

    public function changePassword(){
        $validatedData = $this->validate();
        $rows = Auth::user()->update(['password' => Hash::make($this->password),]);
        if($rows){
            $result = ['success' => '¡Operación exitosa!',];
            $this->resetErrorBag();
        }else{
            $result = ['error' => '¡Falla en la operación!',];
        }
        $this->emit('alert', $result);
    }

    public function render()
    {
        return view('livewire.my-data.password');
    }
}
