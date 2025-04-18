<!doctype html>
<html>
    <head>
        <title>Ficha Empleado</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="#">Enlace 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Enlace 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Enlace 3</a>
                    </li>  
                </ul>
            </div>  
        </nav>
        <div class="container my-3" >
            <div class="row">
                <div class="col-sm-3">
                    <h2>Ficha de empleado</h2>
                    <div class="card">
                        <img src='@asset("assets/img/empleado.jpg")' class="card-img-top img-fluid img-thumbnail" alt="foto">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Código: {{ $persona->codigo | 'Sin Código' }}</li>
                                <li class="list-group-item">Nombre: {{ $persona->nombre | strtoupper }}</li>
                                <li class="list-group-item">Edad: {{ $persona->edad }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    @set($numCursos = count ($cursos))
                    <h2>Cursos de Formación ({{ $numCursos }})</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Area</th>
                                <th scope="col">Horas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cursos as $curso)
                            <tr>
                                <td>{{ $curso->nombre }}</td>
                                <td>{{ $curso->area }}</td>
                                <td>{{ $curso->horas }}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td>  Total Horas: {{ array_sum(array_column($cursos, 'horas')) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="jumbotron text-center" style="margin-bottom:0">
            <p>Author: Iván Rodríguez</p>
            <p><a href="mailto:ivan@ivan.com">ivan@ivan.com</a></p>
        </div>
        <script src="@asset('js/bootstrap.bundle.min.js')"></script>
    </body>

</html>

