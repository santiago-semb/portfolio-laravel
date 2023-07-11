<style>
    .div-blogs-botones-categorias {
        padding: 10px;
    }

    .div-blogs-botones-categorias button {
        padding: 5px;
        float: right;
        margin-left: 5px;
        margin-right: 5px;
        border: 1px solid orangered;
        border-radius: 0.3em;
        background-color: orangered;
        color: whitesmoke;
    }

    .div-blogs-blog {
        text-align: center;
        margin-top: 40px;
    }

    .div-blogs-blog h1 {
        margin-bottom: 10px;
        text-transform: capitalize
    }

    .div-blogs-blog img {
        width: 500px;
        height: 400px;
        border-radius: 0.2em;
    }
</style>


@extends('index')

@section('title', 'Blog')
@section('content')
@include('menu-sobre-mi.menu-sobre-mi')
<div id="contenido-inicio">

    <div class="contenido-principal">
        <div class="blogs">
            <!--<div class="div-blogs-botones-categorias">
                <button>Informática</button>
                <button>Programación</button>
                <button>Otra categoria</button>
            </div>-->

            @foreach ($blogs as $blog)
            <div class="div-blogs-blog">
                <small style="float: right">{{$blog->created_at}}</small>
                <h1>{{$blog->titulo}}</h1>
                <a href="{{route('blog.show',$blog)}}"><img src="{{$blog->imagen}}" style="border-radius: 1.2em; border: 1px solid #ccc;"></a>
            </div>
            @endforeach
        </div>
    </div>

</div>
    
@endsection