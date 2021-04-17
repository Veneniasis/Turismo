@extends('plantilla')

@section('content')
<p></p>
<br>
<h5>Tours</h5>
<p></p>
<br>
<p></p>
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($datos AS $v)
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="https://www.campusfrance.org/sites/default/files/styles/mobile_rte_large/public/Eiffel.jpg?itok=FxlINgLO" class="card-img-top">
            <div class="card-body">
                <div class="recuadro">
                    <p>{{$v -> precio}}</p>
                </div>
                <div class="descripcion">
                    <h6>{{$v -> ciudad}}</h6>
                    <h5>{{$v -> nombre}}</h5>
                    <p>{{$v -> descripcion}}</p>
                </div>
                <a href="{{ url('/tours/'.$v -> id) }}" class="btn btn-primary btn-block" >Ver</a>
                <a href="#" class="btn btn-success btn-block" >Reservar</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection