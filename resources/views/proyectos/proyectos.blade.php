<style>
    #h1-tabla {
        text-align: center;
        padding: 5px;
        margin-bottom: 10px;
        background-color: orange;
        color: white;
        border-radius: 0.2em;
    }

    table {
        width: 95%;
        background-color: #ccc;
        margin: 0 auto;
        border-radius: 0.2em;
        text-align: center;
    }

    table th {
        border: 1px solid white;
        padding: 10px;
        border-radius: 0.2em;
    }

    table td {
        border: 1px solid white;
        border-radius: 0.2em;
        padding: 5px;
    } 

</style>


@extends('index')

@section('title', 'Proyectos')
@section('content')

<div id="contenido-inicio">

    <div class="contenido-principal">
        <h1 id="h1-tabla">Mis Proyectos</h1>
        <table id="tabla-proyectos">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Lenguajes</th>
                    <th>Link</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1; @endphp
                @foreach ($proyectos as $proyecto)
                <tr id="tr-tbody">
                    <td>{{$i}}</td>
                    <td>{{$proyecto->nombre}}</td>
                    <td><mark style="padding: 2px; background-color: black; color:whitesmoke; border-radius:0.2em;">{{$proyecto->lenguajes}}</mark></td>
                    <td><a id="link-proyecto" href="{{$proyecto->link}}" target="_blank">{{$proyecto->link}}</a></td>
                    <td>{{$proyecto->descripcion}}</td>
                    @php $i++; @endphp
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
    
@endsection