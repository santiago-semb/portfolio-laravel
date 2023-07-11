<style>
    #h2-blog {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .imagen-blog {
        border: 1px solid #ccc;
        border-radius: 1.2em;
    }

    #contenido-blog {
        margin-top: 15px;
        margin-bottom: 15px;
        background-color:rgb(3, 3, 48);
        border-radius: 0.2em;
    }

    #b-contenido-blog {
    }
</style>

@extends('index')

@section('title', '')
@section('content')
@include('menu-sobre-mi.menu-sobre-mi')
<div id="contenido-inicio">

    <div class="contenido-principal">
        
        <h2 id="h2-blog">{{$blog->titulo}}</h2>
        <img src="../.././img/blogs/{{$blog->imagen}}" class="imagen-blog">
        <small style="float: right">{{$blog->created_at}}</small>
        <div id="contenido-blog">
            <b id="b-contenido-blog">{{$blog->contenido}}</b>
        </div>

    </div>

</div>
    
@endsection