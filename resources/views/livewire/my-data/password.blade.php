<div class="p-5">
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label" for="password">Contraseña</label>
            <div class="position-relative">
                <input id="password" class="form-control" type="password" wire:model.defer='password' placeholder="Contraseña" autocomplete="off" />
                <button type="button" class="btn btn-secondary position-absolute top-0 end-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver" tabindex="-1"><i class="fa fa-eye"></i></button>
            </div>
            @error('password') <span class="error">{{ $message }} </span> @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label" for="confirmation">Confirmar</label>
            <div class="position-relative">
                <input id="confirmation" class="form-control" type="password" wire:model.defer='confirmation' placeholder="Contraseña" autocomplete="off" />
                <button type="button" class="btn btn-secondary position-absolute top-0 end-0" tabindex="-1"><i class="fa fa-eye"></i></button>
            </div>
            @error('confirmation') <span class="error">{{ $message }} </span> @enderror
        </div>
        <button id="save" class="btn btn-primary" wire:click.prevent="changePassword()" >Guardar</button>
    </div>
    @include("livewire.spinner")
        <script>
            $(document).ready(function (){
                $('#password ~ button').click(function (){
                    if($('#password').attr('type') != 'text'){
                        $('#password').attr('type', 'text');
                    }else{
                        $('#password').attr('type', 'password');
                    }
                });

                $('#confirmation ~ button').click(function (){
                    if($('#confirmation').attr('type') != 'text'){
                        $('#confirmation').attr('type', 'text');
                    }else{
                        $('#confirmation').attr('type', 'password');
                    }
                });
            });
        </script>
</div>
