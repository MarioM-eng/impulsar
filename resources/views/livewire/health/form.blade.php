{{--        <form id="#elementsForm">--}}
<div class="row g-3">
    <div id="form-content" class="col-md-4">
        <label class="form-label" for="name">Nombre</label>
        <input class="form-control" type="text" id="name" wire:model.defer='name' placeholder="Nombres">
        @error('name') <span id="error" class="error">{{ $message }}</span> @enderror
    </div>
</div>
{{--            <button class="btn btn-primary" type="submit" >Guardar</button>--}}
{{--        </form>--}}
{{--        <script src="{{asset('js/jquery-3.6.1.min.js')}}" type="text/javascript"></script>--}}
{{--        <script src="{{asset('js/jquery.validate.min.js')}}" type="text/javascript"></script>--}}
{{--        <script src="{{asset('js/validate.js')}}" type="text/javascript"></script>--}}
