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
        <form action="{{route('contacto.enviarMensaje')}}" method="POST" class="formulario-contacto">
            @csrf
            <div id="separador-form">
                <label for="nombreEmisor">Nombre</label>
                @error('nombreEmisor')
                    <small style="color: red">*{{ $message }}</small>
                @enderror
                <br>
                <input type="text" name="nombreEmisor">
            </div>


            <div id="separador-form">
                <label for="correoElectronicoEmisor">Correo electrónico</label>
                @error('emailEmisor')
                    <small style="color: red">*{{ $message }}</small>
                @enderror
                <br>
                <input type="email" name="emailEmisor">
            </div>
            
            <div id="separador-form">
                <label for="mensajeEmisor">Mensaje</label>
                @error('mensajeEmisor')
                    <small style="color: red">*{{ $message }}</small>
                @enderror
                <br>
               <textarea name="mensajeEmisor"></textarea>
            </div>

            <button type="submit" class="boton-enviar">Enviar</button>
            @if(session('info'))
                <small style="color: green">{{session('info')}}</small>
            @endif
        </form>
    </div>

</div>
    
@endsection