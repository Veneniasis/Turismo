@extends('plantilla')

@section('home')
<p>
    <a style="cursor:pointer;">
        <img src="/images/menu.png" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapseExample" width="35" style="margin-left: 12px">
    </a>
</p>
<div class="row" style="margin-left: 0px">
    <div class="col-md-2">
        <div class="collapse" id="collapse1">
            <div class="card card-body">
                <form action="{{ url('/filtrado')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col -2">
                            <select class="form-select" name="categoria" required>
                                <option selected hidden></option>
                                <option value="1">Alojamientos</option>
                                <option value="2">Recorridos</option>
                                <option value="3">Tours</option>
                            </select>
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="1" required>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    30000-40000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="2" >
                                <label class="form-check-label" for="flexRadioDefault2">
                                    50000-60000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="3">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    70000-80000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" value="4">
                                <label class="form-check-label" for="flexRadioDefault4">
                                    90000-100000
                                </label>
                            </div>
                            <br>
                            <input class="btn btn-primary" type="submit" value="Filtrar">  
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container">
    @yield('filtrado')
</div>

<br>
<p></p>
<br>
<p></p>
<img src="https://concepto.de/wp-content/uploads/2012/03/turismo-e1552499811477.jpg" width="100%">
@endsection