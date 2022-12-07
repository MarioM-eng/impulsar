<?php

namespace App\Http\Livewire\MyData;

use App\Models\User as Model;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Identification extends Component
{

    public $cc;

    protected $rules = [
        'cc' => ['required', 'min:8',],
    ];

    protected $messages = [
        'required' => 'Este campo es requerido',
        'min' => 'Al menos :min caracteres',
        'max' => 'Máximo :max caracteres',
        'same' => 'Los caracteres deben ser iguales',
    ];

    public function changeIdentificacion(){
        $validatedData = $this->validate();
        $entity = Model::all()->where('cc',$this->cc)->first();
        if(isset($entity)){
            $this->addError('cc','Ya existe esta identificación');
        }else {
            $rows = Auth::user()->update(['cc' => $this->cc]);
            if($rows){
                $result = ['success' => '¡Operación exitosa!',];
                $this->resetErrorBag();
            }else{
                $result = ['error' => '¡Falla en la operación!',];
            }
            $this->emit('alert', $result);
        }
    }
    public function render()
    {
        return view('livewire.my-data.identification');
    }
}
