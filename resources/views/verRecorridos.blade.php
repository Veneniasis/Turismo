@extends('plantilla')

@section('content')
<p></p>
<br>
<h5>Recorrido: {{$datos -> nombre}}</h5>
<p></p>
<br>
<p></p>
<div class="text-center">
    <img src="https://media-cdn.tripadvisor.com/media/photo-s/0d/bf/0e/8f/panorama-de-la-vereda.jpg">
</div>
<p></p>
<br>
<p></p>
<p>{{$datos -> descripcion}}</p>
<div class="row">
    <div class="col">
        <img src="https://www.epm.com.co/site/Portals/0/EasyDNNnews/64/200nota2_veredamogotesenburitica..png" width="500" height="300">
    </div>
    <div class="col">
        <img src="https://www.elcolombiano.com/documents/10157/0/580x387/0c2/580d365/center/11101/ISLO/image_content_26695303_20160812233904.jpg" width="500" height="300">
    </div>
</div>
@endsection