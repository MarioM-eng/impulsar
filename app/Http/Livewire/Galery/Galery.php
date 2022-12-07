<?php

namespace App\Http\Livewire\Galery;

use App\Models\Galery as model;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Galery extends Component
{
    use WithPagination;
    use WithFileUploads;

    protected $routeName = 'galery';
    public $photo;
    public $urltemporaryUrl;

    public $create = 'galery.create';
    public $formTo = 'galery.create';
    public $list = 'galery.list';
    public $form = 'galery.form';

    /**
     * Computed Properties
     */
    public function getEntitiesProperty()
    {
        return model::orderBy('path')->paginate(10);
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
        $validatedData = $this->validate([
            'photo' => 'required|image|max:1024', // 1MB Max
        ]);
        $name = $this->photo->hashName();
        $path = $this->photo->storeAs('images/gallery',$name);
        $result = ['error' => '¡Sin resultados!',];
        if(isset($path)){
            $model = model::create([
                'path' => $name,
            ]);
            if(isset($model)){
                $result = ['success' => '¡Operación exitosa!',];
                $this->reset();
                $this->resetErrorBag();
            }else{
                $result = ['error' => '¡Falla en la operación!',];
            }
        }else{
            $result = ['error' => '¡Falla en la operación! No se pudo guardar la imagen.',];
        }

        session()->flash('message', $result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $entity = model::find($id);
        $result = Storage::disk('gallery')->delete($entity->path);
        if($result){
            $entity->delete();
        }
    }

    public function render()
    {
        return view('livewire.galery.index');
    }
}
