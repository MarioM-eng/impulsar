<footer id="myFooter">
    <div class="container-fluid">
        @if(\Illuminate\Support\Facades\Auth::guest())
            @if(request()->routeIs('home') || request()->routeIs('contactUs'))
                <div class="row text-center">
                    <div class="col-12 col-sm-6 col-md-3" style="padding-right: 0px;padding-left: 0px;">
                        <h1 class="logo"><a href="#">&nbsp;<img class="img-fluid" src="{{asset('images/logo/logo.jpeg')}}" style="padding: 5px;"></a></h1>
                    </div>
                    <div class="col-12 col-sm-6 col-md-2">
                        <h5>Extensión Sinceleo</h5>
                        <ul>
                            <li class="text-start" style="font-size: 14px;margin-top: 5px;"><a href="#"><i class="fa fa-location-arrow"></i>&nbsp;Transversal 31 #33-60&nbsp; Sincelejo, Sucre<br></a></li>
                            <li class="text-start" style="font-size: 14px;margin-top: 5px;"><a class="text-break" href="#"><i class="fa fa-envelope-o"></i>&nbsp;contacto@impulsarth.co<br></a></li>
                            <li class="text-start" style="font-size: 14px;margin-top: 5px;"><a href="#"><i class="fa fa-phone"></i>&nbsp;605-2820637</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-md-2">
                        <h5>Extensión Montería</h5>
                        <ul>
                            <li class="text-start" style="font-size: 14px;margin-top: 5px;"><a href="#"><i class="fa fa-location-arrow"></i>&nbsp;Carrera 10 #58-80 - Montería, Cordoba<br></a></li>
                            <li class="text-start" style="font-size: 14px;margin-top: 5px;"><a class="text-break" href="#"><i class="fa fa-envelope-o"></i>&nbsp;contactomonteria@impulsarth.co<br></a></li>
                            <li class="text-start" style="font-size: 14px;margin-top: 5px;"><a href="#"><i class="fa fa-phone"></i>&nbsp;605-2820637</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <h5>Enlaces de interés</h5>
                        <ul>
                            <li><a href="#"><i class="fa fa-link"></i>&nbsp;Trabaja con nosotros</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 social-networks"><a class="facebook" href="https://www.facebook.com/ImplusarTH2/"><i class="fa fa-facebook"></i></a><a class="youtube" href="https://www.youtube.com/channel/UCw3orA9yhK-nbkYpxQY1Q5Q"><i class="fa fa-youtube-play"></i></a><a class="instagram" href="https://www.instagram.com/impulsar.th/"><i class="fa fa-instagram"></i></a><a class="linkedin" href="https://www.linkedin.com/in/johany-lisseth-bohorquez-herazo-48961a233/"><i class="fa fa-linkedin"></i></a>
                        <div><a class="btn btn-primary" role="button" href="contact-us.html" style="margin-top: 20px;">Contáctanos</a></div>
                    </div>
                </div>
            @endif
        @endif
        <div class="row footer-copyright">
            <div class="col">
                <p>© 2022 ImpulsarTH</p>
            </div>
        </div>
    </div>
</footer>
