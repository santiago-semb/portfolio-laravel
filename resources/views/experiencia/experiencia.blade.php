<style>
    .experiencia {
        display: block;
        color: black;
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

    .experiencia table {
        display: block;
        overflow:auto;
        color: #31355b;
        width: 73%;
        max-height: 485px;
        border-radius: 0.2em;
        text-align: center;
        margin-top: 20px;
        background-color: whitesmoke;
    }

    .experiencia table th {
        padding-left: 55.6px;
        padding-right: 55.6px;
        padding-top: 10px;
        padding-bottom: 10px;
        border-radius: 0.2em;
        text-transform: uppercase;
    }
    
    .experiencia table td {
        padding: 7px;
        border-radius: 0.2em;
    }

    .tr-tbody:hover {
        background-color: #ccc;
        color: black;
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
            @if(count($experiencias) > 0)

                <table>
                    <thead>
                        <tr class="tr-thead">
                            <th>Título</th>
                            <th>Lugar</th>
                            <th>Desde</th>
                            <th>Hasta</th>
                            <th>Descripcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($experiencias as $experiencia)
                        <tr class="tr-tbody">
                            <td>{{$experiencia->titulo}}</td>
                            <td>{{$experiencia->lugar}}</td>
                            <td>{{$experiencia->desde}}</td>
                            <td>{{$experiencia->hasta}}</td>
                            <td>{{$experiencia->descripcion}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            @else
                <div id="contenedor">
                    <span><i id="img-maletin" class="fa-solid fa-briefcase"></i></span><br><br>
                    <small>Actualmente no poseo experiencia laboral :(</small>
                </div>
            @endif
        </div>

    </div>
</div>
    
@endsection