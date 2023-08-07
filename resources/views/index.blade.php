<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/d3ba0e2c6d.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>@yield('title')</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            /*background-color: #020620;*/
        }

        body {
            background-color: whitesmoke;
        }

        .active {
            background-color: orange !important;
            color: #fff !important;
        }

        #contenido-inicio {
            min-height: 500px;
        }

        .contenido-principal {
            width: 90%;
            min-height: 510px;
            border: 1px solid #ccc;
            border-radius: 0.2em;
            margin: 0 auto;
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 10px;
        }
    </style>
</head>

<body>
    @include('header.header')
    @include('nav.nav')
    @if(str_contains(url()->current(),'inicio') == 1)
        @include('carril-elephants.carril-elephants')
    @endif
    @yield('content')
    @include('footer.footer')
</body>

<!-- jquery -->
<script>
    // que se guarde el modo oscuro/claro
    if (localStorage.getItem("modo") == "oscuro") {
        darkMode();
        $("#luna").css({
            'background-color': 'rgb(23, 23, 109)',
            'color': 'white',
            'border': '1px solid rgb(23, 23, 109)'
        })
    } else {
        whiteMode();
        $("#sol").css({
            'background-color': '#00d4ff',
            'color': 'yellow',
            'border': '1px solid #00d4ff'
        })
    }
    //darkmode
    function darkMode() {
        $("#php-logo").css({
            "filter": "saturate(1250%)",
        });
        $(".elephant-carril").css({
            "background-image": "url('../.././img/estrellas.jpeg')",
        });
        $("nav").css({
            "background-color": "#020021",
        });
        $("footer").css({
            "background": "#020021",
            "color": "rgba(224,118,9,1)",
        });
        $(".bandera").css({
            "filter": "saturate(500%)",
        });
        $(".red-social").css({
            "filter": "saturate(500%)",
        });
        $(".tech").css({
            "filter": "saturate(500%)",
        });
        $(".item-menu-desplegable").css({
            "border": "1px solid orange",
            "background-color": "whitesmoke",
            "color": "orange"
        });
        $("body").css({
            "background-color":"#0d1444"
        });
        $(".contenido-principal").css({
            "background-color":"#020620",
            "color":"whitesmoke",
        });
        $("#h1-tabla").css({
            "background-color":"#04022b",
            "color":"orange"
        });
        $("#tabla-proyectos").css({
            "background-color":"#04022b",
            "color":"whitesmoke",
            "border":"1px solid #ccc"
        })
        $(".tabla-sobre-mi th").css({
            "color":"whitesmoke",
            "border":"1px solid whitesmoke"
        })
        $(".logos").css({
            "background-color":"whitesmoke",
        });
        $(".educacion table, .experiencia table").css({
            "background-color":"#070822",
            "color":"whitesmoke"
        });
        $(".educacion table th, .experiencia table th").css({
            "border":"1px solid whitesmoke"
        });
        $(".experiencia").css({
            "background-color":"#020620"
        })
        $(".formulario-contacto input, .formulario-contacto textarea").css({
            "background-color":"#161515",
            "color":"whitesmoke"
        });
        $("#contenido-blog").css({
            "background-color":"rgb(3, 3, 48)",
            "color":"whitesmoke"
        });
            
        localStorage.setItem("modo", "oscuro")
    }
    // whitemode
    function whiteMode() {
        $("#php-logo").css({
            "filter": "none",
        });
        $(".elephant-carril").css({
            "background-image": "url('../.././img/pasto.jpeg')",
        });
        $("nav").css({
            "background-color": "whitesmoke",
        });
        $("footer").css({
            "background": "rgb(71,6,6)",
            "background": "radial-gradient(circle, rgba(71,6,6,1) 0%, rgba(224,118,9,1) 0%, rgba(255,164,4,1) 100%)",
            "color": "whitesmoke",
        });
        $(".bandera").css({
            "filter": "none",
        });
        $(".red-social").css({
            "filter": "saturate(200%)",
        });
        $(".tech").css({
            "filter": "saturate(100%)",
        });
        $(".item-menu-desplegable").css({
            "background-color": "whitesmoke",
            "color": "orange",
            "border": "1px solid orange"
        });
        $("body").css({
            "background-color":"white"
        });
        $(".contenido-principal").css({
            "background-color":"whitesmoke",
            "color":"black",
        });
        $("#h1-tabla").css({
            "background-color":"orange",
            "color":"white"
        });
        $("#tabla-proyectos").css({
            "background-color":"#ccc",
            "color":"black"
        });
        $(".tabla-sobre-mi th").css({
            "color":"#161515",
            "border":"1px solid #161515"
        })
        $(".logos").css({
            "background-color":"whitesmoke",
        });
        $(".educacion table").css({
            "background-color":"#e1e1e8",
            "color":"#31355b"
        });
        $(".educacion table th").css({
            "border":"1px solid #31355b"
        });
        $(".experiencia").css({
            "background-color":"whitesmoke"
        });
        $(".formulario-contacto input, .formulario-contacto textarea").css({
            "background-color":"white",
            "color":"black"
        });
        $("#contenido-blog").css({
            "background-color":"#f1dec2",
            "color":"black"
        });
            
        localStorage.setItem("modo", "claro")
    }

    if ($('.modo').is("#sol")) {
        $(document).ready(function() {
            $('#sol').click(function() {
                $('#sol').removeClass("active-sol");
                $(this).css({
                    "color": "yellow",
                    "background-color": "#00d4ff",
                    "border": "1px solid #00d4ff",
                });
                $("#luna").css({
                    "background-color": "whitesmoke",
                    "color": "black",
                    "border": "1px solid black",
                })
            });
        });
    }

    if ($('.modo').is("#luna")) {
        $(document).ready(function() {
            $('#luna').click(function() {
                $('#luna').removeClass("active-luna");
                $(this).css({
                    "color": "white",
                    "background-color": "rgb(23, 23, 109)",
                    "border": "1px solid rgb(23, 23, 109)",
                });
                $("#sol").css({
                    "background-color": "whitesmoke",
                    "color": "black",
                    "border": "1px solid black",
                })
            });
        });

    }

    // para el juegito de los elefantes
    contadorPulsaciones = 0
    contador = 1
    do {
        let elephant = $("#php-elephant" + contador)
        $(elephant).click(function() {
            contadorPulsaciones++
            console.log(elephant)
            $("#contador").html(contadorPulsaciones)
            $(elephant).animate({
                "width": "0px"
            });
        });
        contador++
    }
    while (document.getElementById(`php-elephant${contador}`))
</script>
</html>
