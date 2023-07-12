<style>
    .tabla-sobre-mi {
        display: block;
        overflow: auto;
        width: 73%;
        height: 490px;
        text-align: center;
    }
    
    .tabla-sobre-mi th {
        padding: 10px;
        border: 1px solid #31355b;
        border-radius: 0.2em;
        font-size: 18px;
    }

    .tabla-sobre-mi td {
        padding: 5px;
        width: 150px;
        height: 100px;
    }

    .logos {
        width: 120px;
        height: 100px;
        border: 1px solid #ccc;
        border-radius: 0.2em;
        padding: 15px;
        transition: 200ms all;
    }

    .nada {
        width: 120px;
        height: 100px;
    }

    .logos:hover {
        -webkit-transform:scale(1.05);transform:scale(1.05);
    }
</style>

@extends('index')
@section('title', 'Sobre mí')
@section('content')
@include('menu-sobre-mi.menu-sobre-mi')
<div id="contenido-inicio">

    <div class="contenido-principal">
        @include('info-personal-card.info-personal-card')
        <div>
            <table class="tabla-sobre-mi">
                <thead>
                    <tr>
                        <th id="backend">Backend</th>
                        <th id="frontend">Frontend</th>
                        <th id="database">Database</th>
                        <th id="devops">DevOps</th>
                        <th id="tools">Herramientas</th>         
                    </tr>
                </thead>
                <tbody>
                <tr>
                        @for ($i=0;$i<5;$i++)

                        @if($skills5[$i]->categoria === "backend")
                            <td id="td-backend">
                                <img src="../.././img/logos/logo-{{$skills5[$i]->nombre}}.png" class="logos" alt="{{$skills5[$i]->nombre}}">
                            </td>
                            @elseif($skills5[$i]->categoria === "nada")
                            <td></td>

                        @elseif($skills5[$i]->categoria === "frontend")
                           <td id="td-frontend">
                               <img src="../.././img/logos/logo-{{$skills5[$i]->nombre}}.png" class="logos" alt="{{$skills5[$i]->nombre}}">
                           </td>
                           @elseif($skills5[$i]->categoria === "nada")
                           <td></td>

                        @elseif($skills5[$i]->categoria === "database")
                           <td id="td-database">
                               <img src="../.././img/logos/logo-{{$skills5[$i]->nombre}}.png" class="logos" alt="{{$skills5[$i]->nombre}}">
                           </td>
                           @elseif($skills5[$i]->categoria === "nada")
                           <td></td>  

                        @elseif($skills5[$i]->categoria === "devops")
                           <td id="td-devops">
                               <img src="../.././img/logos/logo-{{$skills5[$i]->nombre}}.png" class="logos" alt="{{$skills5[$i]->nombre}}">
                           </td>
                           @elseif($skills5[$i]->categoria === "nada")
                           <td></td>

                        @elseif($skills5[$i]->categoria === "tools")
                           <td id="td-tools">
                               <img src="../.././img/logos/logo-{{$skills5[$i]->nombre}}.png" class="logos" alt="{{$skills5[$i]->nombre}}">
                           </td>
                           @elseif($skills5[$i]->categoria === "nada")
                        <td></td>
                        @endif  

                   @endfor
                </tr>
                <tr>
                    @for ($i=0;$i<5;$i++)

                    @if($skills10[$i]->categoria === "backend")
                        <td id="td-backend">
                            <img src="../.././img/logos/logo-{{$skills10[$i]->nombre}}.png" class="logos" alt="{{$skills10[$i]->nombre}}">
                        </td>
                        @elseif($skills10[$i]->categoria === "nada")
                        <td></td>
            

                    @elseif($skills10[$i]->categoria === "frontend")
                       <td id="td-frontend">
                           <img src="../.././img/logos/logo-{{$skills10[$i]->nombre}}.png" class="logos" alt="{{$skills10[$i]->nombre}}">
                       </td>
                       @elseif($skills10[$i]->categoria === "nada")
                        <td></td>
                 

                    @elseif($skills10[$i]->categoria === "database")
                       <td id="td-database">
                           <img src="../.././img/logos/logo-{{$skills10[$i]->nombre}}.png" class="logos" alt="{{$skills10[$i]->nombre}}">
                       </td>
                       @elseif($skills10[$i]->categoria === "nada")
                        <td></td>
              

                    @elseif($skills10[$i]->categoria === "devops")
                       <td id="td-devops">
                           <img src="../.././img/logos/logo-{{$skills10[$i]->nombre}}.png" class="logos" alt="{{$skills10[$i]->nombre}}">
                       </td>
                       @elseif($skills10[$i]->categoria === "nada")
                        <td></td>
         

                    @elseif($skills10[$i]->categoria === "tools")
                       <td id="td-tools">
                           <img src="../.././img/logos/logo-{{$skills10[$i]->nombre}}.png" class="logos" alt="{{$skills10[$i]->nombre}}">
                       </td>
                       @elseif($skills10[$i]->categoria === "nada")
                        <td></td>
   
                       @endif
               @endfor
            </tr>

            <tr>
                @for ($i=0;$i<5;$i++)

                @if($skills15[$i]->categoria === "backend")
                    <td id="td-backend">
                        <img src="../.././img/logos/logo-{{$skills15[$i]->nombre}}.png" class="logos" alt="{{$skills15[$i]->nombre}}">
                    </td>
                    @elseif($skills15[$i]->categoria === "nada")
                    <td></td>
                @elseif($skills15[$i]->categoria === "frontend")
                   <td id="td-frontend">
                       <img src="../.././img/logos/logo-{{$skills15[$i]->nombre}}.png" class="logos" alt="{{$skills15[$i]->nombre}}">
                   </td>
                   @elseif($skills15[$i]->categoria === "nada")
                   <td></td>

                @elseif($skills15[$i]->categoria === "database")
                   <td id="td-database">
                       <img src="../.././img/logos/logo-{{$skills15[$i]->nombre}}.png" class="logos" alt="{{$skills15[$i]->nombre}}">
                   </td>
                   @elseif($skills15[$i]->categoria === "nada")
                   <td></td> 

                @elseif($skills15[$i]->categoria === "devops")
                   <td id="td-devops">
                       <img src="../.././img/logos/logo-{{$skills15[$i]->nombre}}.png" class="logos" alt="{{$skills15[$i]->nombre}}">
                   </td>
                   @elseif($skills15[$i]->categoria === "nada")
                   <td></td>

                @elseif($skills15[$i]->categoria === "tools")
                   <td id="td-tools">
                       <img src="../.././img/logos/logo-{{$skills15[$i]->nombre}}.png" class="logos" alt="{{$skills15[$i]->nombre}}">
                   </td>
                   @elseif($skills15[$i]->categoria === "nada")
                        <td></td>
                @endif  

           @endfor
        </tr>
     
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection