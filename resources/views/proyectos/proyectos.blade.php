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

    #link-proyecto {
        color: orangered;
    }
</style>

@extends('index')

@section('title', 'Proyectos')
@section('content')

<div id="contenido-inicio">

    <div class="alert alert-dark" role="alert" style="width: 95%; margin: 0 auto; margin-top:10px;">
        <b style="color: red; margin-right: 5px;">¡¡ATENCION!!</b><span style="color: green;">La información en los proyectos puede tardar unos minutos en cargar...</span>
      </div>

    <div class="contenido-principal" style="overflow: auto">
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
                    <td><b>{{$proyecto->lenguajes}}</b></td>
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