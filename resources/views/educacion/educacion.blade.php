<style>
    .educacion table {
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

    .educacion table th {
        padding-left: 55.6px;
        padding-right: 55.6px;
        padding-top: 10px;
        padding-bottom: 10px;
        border-radius: 0.2em;
        text-transform: uppercase;
    }
    
    .educacion table td {
        padding: 7px;
        border-radius: 0.2em;
    }

    .tr-tbody:hover {
        background-color: #ccc;
        color: black;
    }

</style>


@extends('sobre-mi.sobre-mi')

@section('title', 'Educación')
@section('content')

@include('menu-sobre-mi.menu-sobre-mi')
<div id="contenido-inicio">

    <div class="contenido-principal">
        @include('info-personal-card.info-personal-card')

        <div class="educacion">
            <table>
                <thead>
                    <tr class="tr-thead">
                        <th>#</th>
                        <th>Descripción</th>
                        <th>Institución</th>
                        <th>Estado</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp
                    @foreach($educacion as $edu)
                    <tr class="tr-tbody">
                        <td>{{$i}}</td>
                        <td>{{$edu->descripcion}}</td>
                        <td>{{$edu->institucion}}</td>
                        <td>{{$edu->estado}}</td>
                        <td>{{$edu->fecha}}</td>
                        @php $i++; @endphp
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
    
@endsection