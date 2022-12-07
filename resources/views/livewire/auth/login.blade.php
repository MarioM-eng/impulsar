@section('title','Login')
<section class="clean-block clean-form dark">
    <div class="container">
        <div class="block-heading">
            <h2 class="text-info">Log In</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
        </div>
        <form id="login" novalidate>
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control item" wire:model.defer="email" type="email" id="email">
                @error('email')
                <span class="error" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" wire:model.defer="password" type="password" id="password">
                @error('password')
                    <span class="error" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="mb-3">
                <div class="form-check"><input class="form-check-input" wire:model.defer="remember" type="checkbox" id="checkbox"><label class="form-check-label" for="checkbox">Remember me</label></div>
            </div><button class="btn btn-primary" wire:click.prevent="authenticate()" type="submit">Log In</button>
        </form>
    </div>
</section>
