@section('title','Salud')
<div>
    <section wire:ignore.self data-aos="fade" data-aos-duration="1000" data-aos-delay="50" id="about-us" class="clean-block about-us">
        <div>
            {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
            <div class="container">
{{--                <div class="p-2">--}}
{{--                    @if ($errors->any())--}}
{{--                        <div class="alert alert-danger">--}}
{{--                            <p>Corrige los siguientes errores:</p>--}}
{{--                            <ul>--}}
{{--                                @foreach ($errors->all() as $error)--}}
{{--                                    <li>{{ $error }}</li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                </div>--}}
                <div class="row justify-content-center" style="padding-top: 20px;padding-bottom: 20px;">
                    <div class="col-xl-10 col-xxl-9">
                        <div class="card shadow" id="card">
                            <div class="card-header d-flex flex-wrap justify-content-center align-items-center justify-content-sm-between gap-3">
                                <h5 class="display-6 text-nowrap text-capitalize mb-0">Salud</h5>
                                <div class="d-flex flex-row justify-content-between" style="width: 255.4px;"><button class="btn btn-primary btn-sm add" data-bs-toggle="modal" data-bs-target="#form" wire:click="create()" type="button"><i class="fa fa-plus"></i></button>
                                    <div class="input-group input-group-sm w-auto px-1">
                                        <input class="form-control form-control-sm" type="search" wire:model.debounce.500ms="search" placeholder="Buscar">
                                    </div>
                                </div>
                            </div>
                            <div id="card-content-list">
                                <div class="card-body">
                                    @include("livewire.$list")
                                </div>
                                <div class="card-footer">
                                    <nav>
                                        <ul class="pagination pagination-sm mb-0 justify-content-center">
                                            {{--                                    {{$healths->links()}}--}}
                                            @if(!$this->entities->onFirstPage())
                                                <li class="page-item"><a class="page-link" href="{{route($this->routeName)}}/?page=@isset($_GET["page"]) {{$_GET["page"] - 1}}  @endisset @php(isset($_GET["data"]) ? print "&data=" . $_GET["data"] : "")" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            @endif
                                            @for($i = 1; $i<=$this->entities->lastPage();$i++)
                                                <li class="page-item"><a class="page-link" href="{{route($this->routeName)}}/?page={{$i}} @isset($_GET["data"]) {{"&data=" . $_GET["data"]}}  @endisset">{{$i}}</a></li>
                                            @endfor
                                            @if($this->entities->currentPage() != $this->entities->lastPage())
                                                <li class="page-item"><a class="page-link" href="{{route($this->routeName)}}/?page=@isset($_GET["page"]) {{$_GET["page"] + 1}} @else {{2}}  @endisset @php(isset($_GET["data"]) ? print "&data=" . $_GET["data"] : "")" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    @include("livewire.health.form")--}}
    <div wire:ignore.self class="modal fade" role="dialog" tabindex="-1" id="form">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div id="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </symbol>
                        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                        </symbol>
                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </symbol>
                    </svg>
                    @if (session()->has('message'))
                        @if(session('message')['success'])
                            <div class="alert alert-success d-flex justify-content-between" role="alert">
                                <div class="d-flex flex-row">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                    <span>{{session('message')['success']}}</span>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @elseif(session('message')['error'])
                            <div class="alert alert-danger d-flex justify-content-between" role="alert">
                                <div class="d-flex flex-row">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                    <span>{{session('message')['success']}}</span>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <script>setTimeout(function (){document.querySelector('div[role=alert]').remove()}, 3000);</script>
                    @endif
                </div>
                {{--                contenido de formularios--}}
                @include("livewire.$formTo")
            </div>
        </div>
    </div>
    @include("livewire.spinner")
</div>
