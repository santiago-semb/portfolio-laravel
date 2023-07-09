<style>
    .formulario-contacto {
        width: 95%;
        margin: 0 auto;
        height: 430px;
        padding: 10px;
    }

    #separador-form {
        padding: 5px;
    }

    .formulario-contacto label {
        font-size: 20px;
    }

    .formulario-contacto input {
        width: 40%;
        height: 30px;
        border-radius: 0.3em;
        border: 1px solid gainsboro;
        transition: 50ms all;
        outline: none;
        padding-left: 5px;
        margin-top: 5px;
    }

    .formulario-contacto input:hover, .formulario-contacto textarea:hover {
        border: 3px solid salmon;
    }

    .formulario-contacto input:focus, .formulario-contacto textarea:focus {
        border: 2px solid gray;
    }

    .formulario-contacto textarea {
        border: 1px solid gainsboro;
        width: 80%;
        max-width: 80%;
        min-width: 80%;
        min-height: 250px;
        max-height: 250px;
        outline: none;
        padding: 5px;
        margin-top: 5px;
        border-radius: 0.2em;
    }

    .boton-enviar {
        margin-top: 5px;
        padding: 8px;
        background: orangered;
        border: 1px solid orangered;
        border-radius: 0.5em;
        color: white;
        transition: 300ms all;
        margin-left: 10px;
    }
    .boton-enviar:hover {
        background: orange;
        border: 1px solid orange;
        padding-right: 30px;
        padding-left: 30px;
    }

    #title-contacto {
        float: right;
        padding: 50px;
        transition: 500ms all;
        color: orangered;
    }
    #title-contacto:hover {
        -webkit-transform:scale(1.2);transform:scale(1.2);
    }
</style>

@extends('index')

@section('title', 'Contacto')
@section('content')

<div id="contenido-inicio">

    <div class="contenido-principal">
        <h1 id="title-contacto">Contáctame</h1>
        <form action="" class="formulario-contacto">
            <div id="separador-form">
                <label for="nombreEmisor">Nombre</label><br>
                <input type="text">
            </div>
            <div id="separador-form">
                <label for="correoElectronicoEmisor">Correo electrónico</label><br>
                <input type="email">
            </div>
            <div id="separador-form">
                <label for="mensajeEmisor">Mensaje</label><br>
               <textarea></textarea>
            </div>
            <button type="submit" class="boton-enviar">Enviar</button>
        </form>
    </div>

</div>
    
@endsection