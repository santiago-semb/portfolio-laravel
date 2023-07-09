<style>
    .tabla-sobre-mi {
        display: block;
        overflow: auto;
        width: 73%;
        height: 490px;
        text-align: center;
    }
    
    .tabla-sobre-mi th {
        padding: 10px;
        border: 1px solid #31355b;
        border-radius: 0.2em;
        font-size: 18px;
    }

    .tabla-sobre-mi td {
        padding: 5px;
        width: 150px;
        height: 100px;
    }

    .logos {
        width: 120px;
        height: 100px;
        border: 1px solid #ccc;
        border-radius: 0.2em;
        padding: 15px;
        transition: 200ms all;
    }

    .logos:hover {
        -webkit-transform:scale(1.05);transform:scale(1.05);
    }
</style>


@extends('index')
@section('title', 'Sobre mí')
@section('content')
@include('menu-sobre-mi.menu-sobre-mi')
<div id="contenido-inicio">

    <div class="contenido-principal">
        @include('info-personal-card.info-personal-card')
        <div>
            <table class="tabla-sobre-mi">
                <thead>
                    <tr>
                        <th>Backend</th>
                        <th>Frontend</th>
                        <th>Database</th>
                        <th>DevOps</th>
                        <th>Herramientas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="../.././img/logo-php.png" class="logos"></td>
                        <td><img src="../.././img/logo-html.png" class="logos"></td>
                        <td><img class="logos"></td>
                        <td></td>
                        <td><img class="logos"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
    
@endsection