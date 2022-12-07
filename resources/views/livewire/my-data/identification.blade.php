<div class="p-5">
    <div class="row g-3">
        <div class="col-md-12">
            <label class="form-label" for="cc">Identificación</label>
            <div class="position-relative">
                <input id="cc" class="form-control" type="number" wire:model.defer='cc' min="8" placeholder="Identificación" autocomplete="off" />
            </div>
            @error('cc') <span class="error">{{ $message }} </span> @enderror
        </div>
        <button id="save" class="btn btn-primary" wire:click.prevent="changeIdentificacion()" >Guardar</button>
    </div>
    @include("livewire.spinner")
</div>
