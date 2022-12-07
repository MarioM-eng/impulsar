@section('css')
    <link rel="stylesheet" href="{{asset('css/best-carousel-slide.css')}}">
@endsection
<section data-aos="fade" data-aos-duration="500" data-aos-delay="50" id="galery" class="clean-block clean-gallery dark" style="padding-bottom: 0px;">
    <div class="container">
        <div class="block-heading">
            <h2>Galería</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
        </div>
        <div class="row">
            @foreach($gallery as $photo)
                <div class="col-md-6 col-lg-4 offset-xl-0 item"><a target="_blank" class="lightbox" href="{{asset("gallery/$photo->path")}}"><img class="img-thumbnail img-fluid image w-100" style="max-height: 295px" src="{{asset("gallery/$photo->path")}}"></a></div>
            @endforeach
        </div>
    </div>
</section>
<section data-aos="fade" data-aos-duration="500" data-aos-delay="50" id="consulting" class="clean-block about-us">
    <div class="container">
        <div class="block-heading">
            <h2>Consulting</h2>
        </div>
        <div class="row h-100">
            <div class="col-lg-7 my-auto">
                <div class="mx-auto header-content">
                    <h6 class="mb-5">IMPULSAR TH CONSULTING, ofrece al mercado de las pymes el servicio de fortalecimiento gestión empresarial mediante la asesoría de la gestión administrativa, estructura financiera, control de procesos, apoyo en el posicionamiento de la marca, gestión de marketing, formulación de proyectos, creación, registro y acompañamiento en el desarrollo de la nueva empresa.<br></h6><a class="btn btn-primary" role="button" href="contact-us.html">¡Contáctanos!</a>
                </div>
            </div>
            <div class="col-lg-5 my-auto">
                <div class="device-container">
                    <div class="device-mockup iphone6_plus portrait white">
                        <div class="consulting">
                            <div class="screen"><img class="img-fluid" src="{{asset('images/undraw_Work_together_re_5yhn.png')}}"></div>
                            <div class="button"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section data-aos="fade" data-aos-duration="500" data-aos-delay="50" id="outsourcing" class="clean-block about-us">
    <div class="container">
        <div class="block-heading">
            <h2>Outsourcing<br></h2>
        </div>
        <div class="row h-100">
            <div class="col-lg-7 my-auto">
                <div class="mx-auto header-content">
                    <h6 class="mb-5">IMPULSAR TH OUTSOURCING, Ofrece al mercado servicios de convocatorias, selección, contratación, procesos de nómina y administración del personal temporal en misión a empresas privadas y estatales.<br></h6><a class="btn btn-primary" role="button" href="contact-us.html">¡Contáctanos!</a>
                </div>
            </div>
            <div class="col-lg-5 my-auto">
                <div class="consulting-container">
                    <div class="device-mockup iphone6_plus portrait white">
                        <div class="consulting">
                            <div class="screen"><img class="img-fluid" src="{{asset('images/undraw_Personal_info_re_ur1n.png')}}"></div>
                            <div class="button"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section data-aos="fade" data-aos-duration="500" data-aos-delay="50" id="about-us" class="clean-block about-us">
    <div class="container">
        <div class="block-heading">
            <h2>Sobre nosotros</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-4">
                <div class="card text-center clean-card">
                    <div class="img"><img src="{{asset('images/icons/undraw_team_spirit_re_yl1v.svg')}}"></div>
                    <div class="card-body d-flex flex-column justify-content-start info" style="height: 310px;">
                        <h4 class="card-title">Nosotros</h4>
                        <p class="card-text"><strong>ImpulsarTH</strong>, somos una empresa conformada por profesionales con amplia experiencia en la gestión y administración del talento humano con base a las necesidades del cliente.<br></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card text-center clean-card">
                    <div class="img"><img src="{{asset('images/icons/undraw_shared_goals_re_jvqd.svg')}}" style="/*max-width: 200px;*//*padding-top: 10px;*//*padding-bottom: 10px;*/"></div>
                    <div class="card-body d-flex flex-column justify-content-start info" style="height: 310px;">
                        <h4 class="card-title">Misión</h4>
                        <p class="card-text">Somos empresa dedicada a la gestión integral del talento humano y el fortalecimiento empresarial, con una cultura organizacional de excelencia en el servicio y responsabilidad social, por medio de nuestra estructura organizacional y equipo de colaboradores garantizamos la satisfacción en los requerimientos de nuestros clientes en el ámbito nacional estatal o privado.<br></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card text-center clean-card">
                    <div class="img"><img src="{{asset('images/icons/undraw_forming_ideas_re_2afc.svg')}}"></div>
                    <div class="card-body d-flex flex-column justify-content-start info" style="height: 310px;">
                        <h4 class="card-title">Visión</h4>
                        <p class="card-text">Para el año 2024 IMPULSAR TH será una empresa reconocida en la región por sus altos estándares de calidad en la gestión integral del talento humano y el fortalecimiento empresarial, con un alto sentido de responsabilidad social a nivel local, nacional e internacional.<br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
