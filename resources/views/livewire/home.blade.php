@section('title','Incio')
<div>
    @if(\Illuminate\Support\Facades\Auth::check())
        @include('livewire.home.homeAuthenticated')
    @else
        @include('livewire.home.homeGuest')
    @endif
</div>
