<div>
    <div class="modal-header">
        <h4 class="modal-title">Agregar</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        @include("livewire.$form")
    </div>
    <div class="modal-footer">
        <button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancelar</button>
        <button class="btn btn-primary" wire:click.prevent="store()" >Guardar</button></div>
</div>
