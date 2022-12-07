<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($this->entities->items() as $entity)
            <tr>
                <td class="text-truncate" style="max-width: 200px;">{{$entity->id}}</td>
                <td class="text-truncate" style="max-width: 200px;">{{$entity->name}}</td>
                <td class="text-center" style="width: 125px;">
                    <div class="d-flex justify-content-around">
                        <button class="btn btn-info btn-sm see" data-bs-toggle="modal" data-bs-target="#form" wire:click="show({{$entity->id}})" type="button"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-secondary btn-sm update" data-bs-toggle="modal" data-bs-target="#form" wire:click="edit({{$entity->id}})" type="button"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger btn-sm delete" wire:click="destroy({{$entity->id}})" ><i class="fa fa-trash-o"></i></button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
