<style>
    #contenido-inicio {
        min-height: 500px;
    }

    .contenido-principal {
        width: 90%;
        height: 500px;
        border: 1px solid #ccc;
        border-radius: 0.2em;
        margin: 0 auto;
        margin-top: 10px;
        margin-bottom: 10px;
        padding: 10px;
    }

    .tecnologias {
        width: 50;
        height: 47px;
        padding: 4px;
        background-color: #f0e1e1;
        border-radius: 0.5em;
        margin-top: 3px;
    }

    .logos-tecnologias li {
        border: 1px solid #ccc;
        margin-top: 1px;
        border-radius: 0.2em;
    }
    #languages {
        
    }
</style>


@extends('index')

@section('title', 'Inicio')
@section('content')

<div id="contenido-inicio">

    <div class="contenido-principal">
        <h1>Bienvenido a mi página web!</h1>
        <p>Este es mi portfolio versión 3</p>
        <p>Los lenguajes y frameworks que he utilizado para este proyecto: <br>
            <span style="color: orangered;">HTML</span>
            <span style="color: rgb(32, 209, 209);">CSS</span>
            <span style="color: blue">Jquery</span> |
            <span style="color: purple">PHP</span> |
            <span style="color: orange">MySQL</span> |
            <span style="color: red">Laravel</span></p>
            <br>
            <div class="logos-tecnologias">
                <li><img class="tecnologias" src="../.././img/logo-html.png"></li>
                <li><img class="tecnologias" src="../.././img/logo-css.png"></li>
                <li><img class="tecnologias" src="../.././img/logo-jquery.png"></li>
                <li><img class="tecnologias" src="../.././img/logo-php.png"></li>
                <li><img class="tecnologias" src="../.././img/logo-mysql.png"></li>
                <li><img class="tecnologias" src="../.././img/laravel-logo.png"></li>
            </div>
    </div>

</div>
    
@endsection