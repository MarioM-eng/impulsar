<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User as Model;

class User extends Component
{

    use WithPagination;

    public $cc,$name,$last_name,$date_of_birth,$cellphone,$phone,$email,$password;
    public $entity_id;
    public $search;
    public array $paperBin = ['status' => false, 'icon' => 'fa-trash-o', 'btn' => 'btn-warning', 'title' => 'Papelera'];
    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => '1'],
    ];
    protected $routeName = 'user';
    protected $title = 'Usuarios';
    public $create = 'user.create';
    public $show = 'user.show';
    public $edit = 'user.edit';
    public $formTo = 'user.create';
    public $list = 'user.list';
    public $form = 'user.form';

    protected $rules = [
        'cc' => ['required', 'min:8',],
        'name' => ['required', 'min:3', 'max:50',],
        'last_name' => ['required', 'min:3', 'max:50',],
        'date_of_birth' => ['required',],
        'cellphone' => ['required', 'max:10',],
        'phone' => ['max:10',],
        'password' => ['min:5',],
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

    public function paperBin(){
        if($this->paperBin['status']){
            $this->paperBin['status'] = false;
            $this->paperBin['icon'] = 'fa-trash-o';
            $this->paperBin['btn'] = 'btn-warning';
            $this->paperBin['title'] = 'Papelera';
        }else{
            $this->paperBin['status'] = true;
            $this->paperBin['icon'] = 'fa-list';
            $this->paperBin['btn'] = 'btn-secondary';
            $this->paperBin['title'] = 'Sin papelera';
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->reset();
        if($this->formTo != $this->create){
            $this->formTo = $this->create;
        }
        $this->resetErrorBag();
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store()
    {
        $this->password = Hash::make($this->cc);
        $validatedData = $this->validate();
        if($this->exist()){
            $this->addError('cc','Ya existe esta identificación');
            $result = ['error' => '¡Falla en la operación!',];
        }else{
            $model = Model::create($validatedData);
            if(isset($model)){
                $result = ['success' => '¡Operación exitosa!',];
                $this->reset();
                $this->resetErrorBag();
            }else{
                $result = ['error' => '¡Falla en la operación!',];
            }
        }
        session()->flash('message', $result);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        $entity = Model::withTrashed()->find($id);
        $this->toModel($entity);
        if($this->formTo != $this->show){
            $this->formTo = $this->show;
        }
        $this->resetErrorBag();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entity = Model::find($id);
        $this->entity_id = $entity->id;
        $this->toModel($entity);
        if($this->formTo != $this->edit){
            $this->formTo = $this->edit;
        }
        $this->resetErrorBag();
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
        $entity = Model::find($this->entity_id);
        $this->password = $entity->password;
        $validatedData = $this->validate();
        if($this->updateCC($entity->cc)){
            $rows = $entity->update($validatedData);
            if($rows){
                $result = ['success' => '¡Operación exitosa!',];
                $this->resetErrorBag();
            }else{
                $result = ['error' => '¡Falla en la operación!',];
            }
        }else{
            $result = ['error' => '¡Falla en la operación!',];
        }
        session()->flash('message', $result);
    }

    /**
     * Computed Properties
     * retorna datos que se mostraran en blade en una variable  con el nombre de su propiedad($entities)
     */
    public function getEntitiesProperty()
    {
        if($this->paperBin['status']){
            if(empty($this->search)){
                return Model::onlyTrashed()->where('id','!=',1)->orderBy('name')->paginate(10);
            }else{
                return Model::onlyTrashed()->name($this->search)->where('id','!=',1)->orderBy('name')->paginate(10);
            }
        }else{
            if(empty($this->search)){
                return Model::where('id','!=',1)->orderBy('name')->paginate(10);
            }else{
                return Model::name($this->search)->where('id','!=',1)->orderBy('name')->paginate(10);
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $entity = Model::find($id);
        $entity->delete();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function delete($id)
    {
        $entity = Model::onlyTrashed()->find($id);
        $entity->forceDelete();
    }
    /**
     * Restore the specified resource from storage.
     *
     * @param  int  $id
     */
    public function restore($id)
    {
        $entity = Model::onlyTrashed()->find($id);
        $entity->restore();
    }

    public function render()
    {
        return view('livewire.user.user');
    }
}
