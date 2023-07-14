<style>
    .tabla-certificados {
        width: 100%;
        text-align: left;
        color: #ff3b01;
        border-radius: 0.2em;
    }

    #certificados {
        width: 95%;
        margin: 0 auto;
    }

    #img-certificado {
        background: white;
        height: 90px;
        width: 140px;
        padding: 3px;
        float: left;
        border-radius: 0.2em;
    }

    #tbody-td-nombre-certificado {
        font-size: 35px;
        border-bottom: 2px solid #ccc;
        padding: 10px;
    }

    #boton-ver-certificado {
        background-color: #175916;
        padding: 10px;
        border: 1px solid #175916;
        border-radius: 0.2em;
        color: whitesmoke;
        float: right;
        transition: 300ms all;
    }

    #boton-ver-certificado:hover {
        background-color: #0a6b09;
        border: 1px solid #0a6b09;
        -webkit-transform:scale(1.3);transform:scale(1.3);
    }

    .tr-tbody img {
        margin-top: 20px;
    }
</style>


@extends('index')

@section('title', 'Certificados')
@section('content')

@include('menu-sobre-mi.menu-sobre-mi')
<div id="contenido-inicio">

    <div class="contenido-principal">

        <div id="certificados">
            <table class="tabla-certificados">
                <thead>
                    <tr>
                        <th style="width: 15%;"></th>
                        <th style="width: 75%;"></th>
                        <th style="width: 10%"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($certificados as $certificado)
                    <tr class="tr-tbody">
                        <td><img src="../.././img/certificados/{{$certificado->imagen}}" id="img-certificado"></td>
                        <td id="tbody-td-nombre-certificado">{{$certificado->nombre}}</td>
                        <td><a href="{{$certificado->link}}" target="_blank"><button type="submit" id="boton-ver-certificado">Ver</button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
    
@endsection