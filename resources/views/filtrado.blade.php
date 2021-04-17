@extends('home')

@section('filtrado')
<p></p>
<br>
<h5>{{$title}}</h5>
<p></p>
<br>
<p></p>

<?php 
    $title = strtolower($title);
?>

@if(count($datos) == 0)
    <p>
        {{$x = "No existen ".$title." con estos precios en el momento"}}
    </p>
@endif
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($datos AS $v)
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="https://i.pinimg.com/originals/fe/7b/6c/fe7b6cd3e5ac2913c340cf89a6fbf690.jpg" class="card-img-top">
            <div class="card-body">
                <div class="recuadro">
                    <p>{{$v -> precio}} 
                        @if($title=="Alojamientos")
                            {{$x = "por persona"}}
                        @endif
                    </p>
                </div>
                <div class="descripcion">
                    <h6>{{$v -> ciudad}}</h6>
                    <h5>{{$v -> nombre}}</h5>
                    <p>{{$v -> descripcion}}</p>
                </div>
                <a href="{{ url('/'.$title.'/'.$v -> id) }}" class="btn btn-primary btn-block" >Ver</a>
                <a href="#" class="btn btn-success btn-block" >Reservar</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection