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

    #tr-tbody:hover {
        background-color: black;
        color: white;
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
                <tr id="tr-tbody">
                    <td>1</td>
                    <td>Project 1</td>
                    <td>HTML-CSS-Javascript</td>
                    <td>https://project-1.com</td>
                    <td>This is the the project-1 description</td>
                </tr>
                <tr id="tr-tbody">
                    <td>1</td>
                    <td>Project 1</td>
                    <td>HTML-CSS-Javascript</td>
                    <td>https://project-1.com</td>
                    <td>This is the the project-1 description</td>
                </tr>
                <tr id="tr-tbody">
                    <td>1</td>
                    <td>Project 1</td>
                    <td>HTML-CSS-Javascript</td>
                    <td>https://project-1.com</td>
                    <td>This is the the project-1 description</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
    
@endsection