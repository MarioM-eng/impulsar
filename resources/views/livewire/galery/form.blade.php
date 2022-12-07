<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label" for="imagen">Cargar foto</label>
        <input class="form-control" type="file" id="imagen" wire:model="photo">
        @error('photo') <span id="error" class="error">{{ $message }}</span> @enderror
    </div>
{{--    @if ($photo)--}}
{{--        <div class="col-md-6 d-flex flex-column align-items-center">--}}
{{--            <img class="w-75 h-100 rounded-3" src="{{$photo->temporaryUrl()}}" />--}}
{{--            <label class="form-label" for="imagen">Vista previa</label>--}}
{{--        </div>--}}
{{--    @endif--}}
</div>
