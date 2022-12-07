@extends('app')
@section('title','Contáctanos')
@section('content')
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2>Contáctanos</h2>
                <p>Puedes escribirnos, dejar tus sugerencias y hacernos saber lo que piensas de Impulsar TH.<br>También puedes contactarnos por medio de nuestras redes sociales.</p>
            </div>
            <form style="border-top: 2px solid #FE5735;">
                <div class="mb-3"><label class="form-label" for="name">Nombre</label><input class="form-control" type="text" id="name" name="name"></div>
                <div class="mb-3"><label class="form-label" for="subject">Asunto</label><input class="form-control" type="text" id="subject" name="subject"></div>
                <div class="mb-3"><label class="form-label" for="email">Correo electrónico</label><input class="form-control" type="email" id="email" name="email"></div>
                <div class="mb-3"><label class="form-label" for="message">Mensaje</label><textarea class="form-control" id="message" name="message"></textarea></div>
                <div class="mb-3"><button class="btn btn-primary" type="submit">Enviar</button></div>
            </form>
        </div>
    </section>
@endsection
