<h2>Ficha de empleado</h2>
<div class="card">
    <img src='@relative("assets/img/empleado.jpg")' class="card-img-top img-fluid img-thumbnail" alt="foto">
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Código: {{ $persona->codigo or 'Sin Código' }}</li>
            <li class="list-group-item">Nombre: {{ $persona->nombre | strtoupper }}</li>
            <li class="list-group-item">Edad: {{ $persona->edad }}</li>
        </ul>
    </div>
</div>


