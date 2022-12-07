<?php

namespace App\Http\Livewire\MyData;

use App\Models\User as Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class MyData extends Component
{
    public $title = 'Mis datos';
    public $form = 'data';
    public $data = 'data';
    public $password = 'password';
    public $identification = 'identification';

    protected $listeners = ['alert'];

    public function alert($alert){
        session()->flash('message', $alert);
    }

    public function showFormPassword(){
        $this->reset();
        $this->resetErrorBag();
        $this->form = $this->password;
    }

    public function showFormData(){
        $this->reset();
        $this->resetErrorBag();
        $this->form = $this->data;
    }

    public function showFormIdentification(){
        $this->reset();
        $this->resetErrorBag();
        $this->form = $this->identification;
    }

    public function render()
    {
        return view('livewire.my-data.my-data');
    }
}
