<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Health as model;
use Illuminate\Support\Facades\Validator;

class Health extends Component
{

    use WithPagination;

    public $entity_id;
    public $name;
    public $search;
    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => '1'],
    ];
    protected $routeName = 'health';

    public $create = 'health.create';
    public $show = 'health.show';
    public $edit = 'health.edit';
    public $formTo = 'health.create';
    public $list = 'health.list';
    public $form = 'health.form';

    protected $rules = [
        'name' => [
            'required',
            'min:3',
        ]
    ];
    protected $messages = [
        'required' => 'Este campo es requerido',
        'min' => 'Al menos 3 caracteres',
    ];

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
        $entity = model::all()->where('name',$this->name)->first();
        $validatedData = Validator::make($this->all(),[
            'name' => [
                'required',
                'min:3',
                function ($attribute, $value, $fail) use ($entity) {
                    if(isset($entity)) {
                        if ($value === $entity->name) {
                            $fail('Ya existe este nombre');
                        }
                    }
                },
            ],
        ])->validate();

        $model = model::create($validatedData);
        if(isset($model)){
            $result = ['success' => '¡Operación exitosa!',];
            $this->reset();
            $this->resetErrorBag();
        }else{
            $result = ['error' => '¡Falla en la operación!',];
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
        $entity = model::find($id);
        $this->name = $entity->name;
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
        $entity = model::find($id);
        $this->entity_id = $entity->id;
        $this->name = $entity->name;
        if($this->formTo != $this->edit){
            $this->formTo = $this->edit;
        }
        $this->resetErrorBag();
    }

    /**
     * Update the specified resource in storage.
     */

    public function update()
    {
        $validatedData = $this->validate();
        $entity = model::find($this->entity_id);
        $rows = $entity->update($validatedData);
        $result = [];
        if($rows){
            $result = ['success' => '¡Operación exitosa!',];
            $this->resetErrorBag();
        }else{
            $result = ['error' => '¡Falla en la operación!',];
        }
        session()->flash('message', $result);
    }

    /**
     * Computed Properties
     */
    public function getEntitiesProperty()
    {
        if(empty($this->search)){
            return model::orderBy('name')->paginate(10);
        }else{
            return model::name($this->search)->orderBy('name')->paginate(10);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $entity = model::find($id);
        $entity->delete();
    }

    public function render()
    {
        return view('livewire.health.index');
    }
}
