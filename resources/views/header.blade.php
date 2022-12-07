<header class="header-blue">
    <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search" style="/*position: fixed;*//*top: 0px;*//*width: 100%;*/">
        <div class="container-fluid"><a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo/logo.jpeg')}}" style="width: 142px;"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-between" id="navcol-2">
                <ul class="navbar-nav">
                    @if(! \Illuminate\Support\Facades\Auth::check())
                        @if(!request()->routeIs('home'))
                            <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Inicio</a></li>
                        @endif
                        <li class="nav-item"><a class="nav-link" href="{{route('home')}}/#galery">Galería</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('home')}}/#about-us">Nosotros</a></li>
                        @if(!request()->routeIs('contactUs'))
                            <li class="nav-item"><a class="nav-link" href="{{route('contactUs')}}">Contáctanos</a></li>
                        @endif
                    @else
                        @if(!request()->routeIs('galery'))
                            <li class="nav-item"><a class="nav-link" href="{{route('galery')}}">Galería</a></li>
                        @endif
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Menú</a>
                            <div class="dropdown-menu">
                                @if(!request()->routeIs('health'))
                                    <a class="dropdown-item" href="{{route('health')}}">Salud</a>
                                @endif
                            </div>
                        </li>
                    @endif
                </ul>
                <div class="d-flex flex-row nav-left">
                    @if(! \Illuminate\Support\Facades\Auth::check())
                        @if(!request()->routeIs('login'))
                            <span><a class="btn btn-light action-button" role="button" href="{{route('login')}}">Ingresar</a></span>
                        @endif
                    @else
                    <div class="dropdown"><a class="dropdown-toggle px-4" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fa fa-user"></i></a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="{{route('myData')}}">Mis datos</a><a class="dropdown-item" href="{{route('logout')}}">Salir</a></div>
                    </div>
                @endif
            </div>
        </div>
    </nav>
    @if(request()->routeIs('home') && \Illuminate\Support\Facades\Auth::guest())
        <div class="container hero   mx-0 px-0 mw-100">
            <section id="carousel">
                <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <div class="bg-light border rounded border-light pulse animated hero-nature carousel-hero jumbotron py-5 px-4" style="background-image: url('{{asset('images/news-450x350-1.jpg')}}');">
                                <div class="carousel-info">
                                    <h2 class="hero-title">Impulso Talento Humano</h2>
                                    <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                    <p><a class="btn btn-primary hero-button plat" role="button" href="#">Learn more</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="bg-light border rounded border-light pulse animated hero-photography carousel-hero jumbotron py-5 px-4" style="background-image: url('{{asset('images/news-450x350-2.jpg')}}');">
                                <div class="carousel-info">
                                    <div style="width: 500px;background: rgba(0,0,0,0.4);border-radius: 76px;"></div>
                                    <h2 class="hero-title">Trabajo inmediato</h2>
                                    <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                    <p><a class="btn btn-primary hero-button plat" role="button" href="#">Learn more</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <div class="bg-light border rounded border-light pulse animated hero-technology carousel-hero jumbotron py-5 px-4" style="background-image: url('{{asset('images/news-350x223-1.jpg')}}');">
                                <div class="carousel-info">
                                    <h2 class="hero-title" style="margin: 8px;">Familia Impulsar TH</h2>
                                    <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                    <p><a class="btn btn-primary hero-button plat" role="button" href="#">Learn more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carousel-1" data-bs-slide-to="0"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="2" class="active"></li>
                    </ol>
                </div>
            </section>
        </div>
    @endif
</header>
