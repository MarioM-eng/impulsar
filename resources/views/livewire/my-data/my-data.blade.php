@section('title', $this->title)
@section('css')
    <link rel="stylesheet" href="{{asset('css/Sidebar-Menu.css')}}">
@endsection
<div>
    <section id="my-data" class="clean-block">
        @if (session()->has('message'))
            <x-alert :message="session('message')"/>
        @endif
        <div class="d-flex flex-row">
            <div id="wrapper" style="z-index: 3;">
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav">
                        <li class="sidebar-brand"><a href="{{route('home')}}">Home </a></li>
                        <li><a href="#" wire:click.prevent="showFormData()">Mis datos </a></li>
                        <li><a href="#" wire:click.prevent="showFormIdentification()">Identificación </a></li>
                        <li><a href="#" wire:click.prevent="showFormPassword()">Contraseña </a></li>
                    </ul>
                </div>
                <div class="page-content-wrapper">
                    <div class="container-fluid"><a id="menu-toggle" class="btn btn-primary btn-sm" role="button" href="#menu-toggle"><i class="fa fa-close"></i></a></div>
                </div>
            </div>
            @if($this->form == 'data')
                @livewire("my-data.data")
            @elseif($this->form == 'password')
                @livewire("my-data.password")
            @elseif($this->form == 'identification')
                @livewire("my-data.identification")
            @endif
        </div>
    </section>
    @section('script')
        <script src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
        <script src="{{asset('js/Sidebar-Menu.js')}}"></script>
    @endsection
</div>
