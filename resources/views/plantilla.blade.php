<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Turismo</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/images/viajar.png" width="50">
                Turismo
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/alojamientos') }}">Alojamientos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/recorridos') }}" >Recorridos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/tours') }}">Tours</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    @yield('home')
    <p></p>
    <br>
    <p></p>
    <br>
    <p></p>
    <footer>
        <div class="row align-items-center">
            <div class="col text-end">
                <p class="contactoFooter">Telefono: 9765239<br>
                    Correo: turismo@hotmail.com
                </p>
            </div>
            <div class="col">
                <a href="/">
                    <img href="/" src="/images/instagram.png" width="25">
                </a>
                <a href="/">
                    <img href="/" src="/images/facebook.png" width="25">
                </a>
                <a href="/">
                    <img href="/" src="/images/twitter.png" width="25">
                </a>
            </div>
        </div>
    </footer>
</body>

</html>