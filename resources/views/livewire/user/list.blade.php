<div>
    @if($this->paperBin['status'])
        <div class="alert alert-danger" role="alert">
            ¡Advertencia! Los elementos en<strong class="alert">papelera</strong>se eliminarán permanentemente.
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Identificación</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Celular</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($this->entities->items() as $entity)
                <tr>
                    <td class="text-truncate" style="max-width: 200px;">{{$entity->cc}}</td>
                    <td class="text-truncate" style="max-width: 200px;">{{$entity->name}}</td>
                    <td class="text-truncate" style="max-width: 200px;">{{$entity->last_name}}</td>
                    <td class="text-truncate" style="max-width: 200px;">{{Carbon\Carbon::parse($entity->date_of_birth)->age}}</td>
                    <td class="text-truncate" style="max-width: 200px;">{{$entity->cellphone}}</td>
                    <td class="text-truncate" style="max-width: 200px;">{{$entity->email}}</td>
                    <td class="text-center" style="width: 125px;">
                        <div class="d-flex justify-content-around">
                            <button class="btn btn-info btn-sm see" data-bs-toggle="modal" data-bs-target="#form" title="Ver" wire:click="show({{$entity->id}})" type="button"><i class="fa fa-eye"></i></button>
                            @if($this->paperBin['status'])
                                <button class="btn btn-success btn-sm update" title="Reestaurar" wire:click="restore({{$entity->id}})" type="button"><i class="fa fa-repeat"></i></button>
                                <button class="btn btn-danger btn-sm delete" title="Eliminar" wire:click="delete({{$entity->id}})" ><i class="fa fa-trash-o"></i></button>
                            @else
                                <button class="btn btn-secondary btn-sm update" data-bs-toggle="modal" data-bs-target="#form" title="Editar" wire:click="edit({{$entity->id}})" type="button"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm delete" title="Eliminar" wire:click="destroy({{$entity->id}})" ><i class="fa fa-trash-o"></i></button>
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
