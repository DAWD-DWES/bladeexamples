<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="jumbotron text-center" style="margin-bottom:0"">
            <h1>Registro Empleados</h1>
        </div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="#">Registro</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    @section('enlaces')  
                    <li class="nav-item">
                        <a class="nav-link" href="#">Enlace 1</a>
                    </li>
                    @show
                </ul>
            </div>  
        </nav>
        <div class="container my-3" >
            <div class="row">
                <div class="col-sm-3">
                    @yield('lateral')
                </div>
                <div class="col-sm-9">
                    @yield('contenido')
                </div>
            </div>
        </div>
        <div>
            @yield('alerta')
        </div>
        @include('footer')
        <script src="@asset('js/bootstrap.bundle.min.js')"></script>
        @stack('scripts')
    </body>

</html>

