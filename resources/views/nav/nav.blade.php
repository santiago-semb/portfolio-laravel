<style>
    #nav {
        width: 100%;
        height: 100px;
        background-color: whitesmoke;
        border-bottom: 5px double #ccc;
        text-align: center;
    }

    #nav ul {
        padding: 5px;
        margin-left: 400px;
        height: 90px;
    }

    #nav li {
        list-style: none;
        display: inline-block;
        background-color: whitesmoke;
        border: 1px solid orange;
        padding: 10px;
        border-radius: 0.5em;
        color: orange;
        transition: 500ms all;
        margin-top: 25px;
        font-weight: bold;
        margin-left: 10px;
        margin-right: 10px;
    }

    #nav ul a li {
        text-decoration: none;
    }

    #nav li:hover {
        background-color: orange;
        color: whitesmoke;
    }

    #luna,
    #sol,
    .menu {
        float: right;
        margin: 5px !important;
        padding: 20px !important;
        transition: 200ms all !important;
    }

    #luna {
        width: 15px;
        text-align: center;
    }

    #luna:hover {
        background-color: rgb(23, 23, 109) !important;
        color: white !important;
        border: 1px solid rgb(23, 23, 109) !important;
    }

    #sol:hover {
        background-color: #00d4ff !important;
        color: yellow !important;
        border: 1px solid #00d4ff !important;
    }

    .menu:hover {
        background-color: whitesmoke !important;
        border: 1px solid black !important;
        color: black !important;
    }

    .elephant-carril {
        height: 85px;
        background-image: url("../.././img/pasto.jpeg");
        border-bottom: 2px solid #ccc;
    }

    #php-logo {
        position: absolute;
        width: 150px;
        padding: 10px;
        filter: saturate(250%);
        transition: 1000ms all;
    }

    #php-logo:hover {
        filter: saturate(1250%);
    }

    #logo-mysql {
        position: absolute;
        width: 170px;
        margin-left: 200px;
        filter: saturate(250%);
        transition: 1000ms all;
    }

    #logo-mysql:hover {
        filter: saturate(1250%);
    }

    .hidden {
        display: none;
    }

    .modo {
        margin-top: 10px;
        border-radius: 2em;
    }

    #contador {
        font-weight: bold;
        color: white;
        float: right;
        margin-right: 10px;
        font-size: 30px
    }

    #menu-desplegable {
        border-bottom: 5px double #ccc;
        height: 50px;
    }

    #item-menu-desplegable {
        display: inline-block;
        background-color: whitesmoke;
        color: orange;
        border: 1px solid orange;
        padding: 8px;
        margin-top: 7px;
        margin-left: 5px;
        border-radius: 0.5em;
        transition: 500ms all;
        font-weight: bold;
    }

    #item-menu-desplegable:hover {
        background-color: orange;
        color: whitesmoke;
    }

    #title {
        position: absolute;
        font-size: 45px;
        margin-top: 15px;
        margin-left: 10px;
        background-color: orange;
        padding: 10px;
        color: whitesmoke;
        border-top-left-radius: 0.5em;
        border-bottom-right-radius: 0.5em;
        filter: saturate(500%);
        box-shadow: 10px -5px peru;
    }

    #title b {
        font-size: 18px;
    }
</style>

<div>
    <nav id="nav">
        <h1 id="title">portfolio santiago<b>v3</b></h1>
        <ul>
            <a href="#"><li class="menu" style="border:1px solid black; color:black;"><i class="fa-solid fa-bars"></i></li></a>

            <a href="{{route('inicio')}}"><li class="item-nav" id="boton-menu">Inicio</li></a>
            <a href="{{route('proyectos')}}"><li class="item-nav" id="boton-menu">Proyectos</li></a>
            <a href="{{route('sobre-mi')}}"><li class="item-nav" id="boton-menu">Sobre mí</li></a>
            <a href="{{route('contacto')}}"><li class="item-nav" id="boton-menu">Contacto</li></a>
            <a href="#" onclick="darkMode()"><li class="modo" id="luna" style="border:1px solid black; color:black;"><i class="fa-solid fa-moon"></i></li></a>
            <a href="#" onclick="whiteMode()"><li class="modo" id="sol" style="border:1px solid black; color:black;"><i class="fa-solid fa-sun"></i></li></a>
        </ul>
    </nav>
</div>
