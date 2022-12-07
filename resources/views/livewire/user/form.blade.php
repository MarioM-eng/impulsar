{{--        <form id="#elementsForm">--}}
<div class="row g-3">
    <div class="col-md-4">
        <label class="form-label" for="cc">Identificación</label>
        <input id="cc" class="form-control" type="text" wire:model.defer='cc' placeholder="Identificación" autocomplete="off" />
        @error('cc') <span class="error">{{ $message }} </span> @enderror
    </div>
    <div class="col-md-4">
        <label class="form-label" for="name">Nombre</label>
        <input id="name" class="form-control" type="text" wire:model.defer='name' placeholder="Nombres" />
        @error('name') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="col-md-4">
        <label class="form-label" for="last_name">Apellidos</label>
        <input id="last_name" class="form-control" type="text" wire:model.defer='last_name' placeholder="Apellidos" autocomplete="on"/>
        @error('last_name') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="col-md-4">
        <label class="form-label" for="date_of_birth">Fecha de nacimiento</label>
        <input id="date_of_birth" class="form-control" type="date" wire:model.defer='date_of_birth' />
        @error('date_of_birth') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="col-md-4">
        <label class="form-label" for="cellphone">Celular</label>
        <input id="cellphone" class="form-control" type="number" wire:model.defer='cellphone' placeholder="Celular" />
        @error('cellphone') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="col-md-6">
        <label class="form-label" for="email">Correo electrónico</label>
        <input id="email" class="form-control" type="email" wire:model.defer='email' placeholder="Correo electrónico" />
        @error('email') <span class="error">{{ $message }}</span> @enderror
    </div>
</div>
