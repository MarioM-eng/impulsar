<div class="row galery-manager">
    @foreach($this->entities->items() as $entity)
        <div class="col-md-6 col-lg-4 item" data-bss-hover-animate="pulse">
            <button class="btn btn-danger btn-sm btn-delete" wire:click="destroy({{$entity->id}})" type="button">
                <i class="fa fa-trash-o"></i>
            </button>
            <a class="lightbox">
                <img class="img-thumbnail img-fluid image w-100" style="max-height: 215px" src="{{asset("gallery/$entity->path")}}">
            </a>
        </div>
    @endforeach
</div>
