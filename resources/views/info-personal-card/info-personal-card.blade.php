<style>
    .info-personal {
        height: 490px;
        width: 25%;
        float: left;
        text-align: center;
        border-radius: 0.2em;
    }

    #div-foto {
        padding-bottom: 15px;
    }

    .mi-foto {
        height: 150px;
        width: 150px;
        border-radius: 20em;
        border: 3px silver;
        border-style: inset solid;
        margin-top: 10px;
        transition: 200ms all;
    }

    .mi-foto:hover {
        -webkit-transform:scale(1.2);transform:scale(1.2);
    }
</style>

<div class="info-personal">
    <div id="div-foto">
        <img class="mi-foto" src="../.././img/sobre-mi/foto-santiago(1).png">
    </div>
    <div id="div-data">
        <br>
        <span><b style="text-transform: capitalize">{{ $persona->nombre }} {{ $persona->apellido }}</b></span><br><br>
        <span><b>{{ $persona->edad }} años</b></span><br><br>
        <span><b>{{ $persona->email }}</b></span><br><br>
        <span><b>+{{ $persona->telefono }}</b></span><br><br>
    </div>
</div>
