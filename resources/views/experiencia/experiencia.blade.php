<style>
    .experiencia {
        display: block;
        overflow:auto;
        color: black;
        width: 73%;
        height: 460px;
        border-radius: 0.2em;
        text-align: center;
        margin-top: 20px;
        background-color: whitesmoke;
    }

    #img-maletin {
        font-size: 80px;
    }

    #contenedor {
        background-color: #ffff99;
        width: 35%;
        padding: 15px;
        margin: 0 auto;
        border-radius: 1em;
    }
</style>


@extends('index')

@section('title', 'Experiencia')
@section('content')

@include('menu-sobre-mi.menu-sobre-mi')
<div id="contenido-inicio">

    <div class="contenido-principal">
        
        @include('info-personal-card.info-personal-card')

        <div class="experiencia">
            <div id="contenedor">
                <span><i id="img-maletin" class="fa-solid fa-briefcase"></i></span><br><br>
                <small>Actualmente no poseo experiencia laboral :(</small>
            </div>
        </div>

    </div>
</div>
    
@endsection