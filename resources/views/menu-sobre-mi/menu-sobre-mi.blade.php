<style>
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
</style>

<nav id="menu-desplegable">
    <ul>
        <a href="./educacion"><li class="item-nav" id="item-menu-desplegable">Educación</li></a>
        <a href="./experiencia"><li class="item-nav" id="item-menu-desplegable">Experiencia</li></a>
        <a href="./blog"><li class="item-nav" id="item-menu-desplegable">Blog</li></a>
        <a href="{{route('certificados')}}"><li class="item-nav" id="item-menu-desplegable">Certificados</li></a>
    </ul>
</nav>