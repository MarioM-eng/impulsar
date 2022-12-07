<?php

namespace App\Http\Livewire\MyData;

use App\Models\User as Model;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Data extends Component
{
    public $cc,$name,$last_name,$date_of_birth,$cellphone,$phone,$email, $confirmation;

    protected $rules = [
        'cc' => ['required', 'min:8',],
        'name' => ['required', 'min:3', 'max:50',],
        'last_name' => ['required', 'min:3', 'max:50',],
        'date_of_birth' => ['required',],
        'cellphone' => ['required', 'max:10',],
        'phone' => ['max:10',],
        'email' => ['required', 'email',],
    ];

    protected $messages = [
        'required' => 'Este campo es requerido',
        'min' => 'Al menos :min caracteres',
        'max' => 'Máximo :max caracteres',
        'email' => 'El campo debe contener una dirección de correo válida.',
    ];

    private function toModel($entity){
        $this->cc = $entity->cc;
        $this->name = $entity->name;
        $this->last_name = $entity->last_name;
        $this->date_of_birth = $entity->date_of_birth;
        $this->cellphone = $entity->cellphone;
        $this->phone = $entity->phone;
        $this->email = $entity->email;
    }

    private function exist(){
        $entity = Model::all()->where('cc',$this->cc)->first();
        return isset($entity);
    }

    private function updateCC($cc){
        if($cc != $this->cc){
            if($this->exist()){
                $this->addError('cc','Ya existe esta identificación');
                return false;
            }else{
                return true;
            }
        }
        return true;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        $validatedData = $this->validate();
        if($this->updateCC(Auth::user()->cc)){
            $rows = Auth::user()->update($validatedData);
            if($rows){
                $result = ['success' => '¡Operación exitosa!',];
                $this->resetErrorBag();
            }else{
                $result = ['error' => '¡Falla en la operación!',];
            }
        }else{
            $result = ['error' => '¡Falla en la operación!',];
        }
        $this->emit('alert', $result);
    }

    public function restore(){
        $this->resetErrorBag();
        $this->toModel(Auth::user());
    }
    public function render()
    {
        $this->toModel(Auth::user());
        return view('livewire.my-data.data');
    }
}
