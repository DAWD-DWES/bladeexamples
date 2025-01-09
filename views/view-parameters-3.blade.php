{{-- Este es un comentario dentro de la plantilla --}}
@extends('app')

@section('title', 'Ficha Empleado')

@section('enlaces')
@parent
<li class="nav-item">
    <a class="nav-link" href="#">Enlace 2</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">Enlace 3</a>
</li>  
@endsection

@section ('lateral')
<h2>Ficha de empleado</h2>
<div class="card">
    <img src='@asset("assets/img/empleado.jpg")' class="card-img-top img-fluid img-thumbnail" alt="foto">
    <img src='@relative("assets/img/empleado.jpg")' class="card-img-top img-fluid img-thumbnail" alt="foto">
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Código: {{ $persona->codigo or 'Sin Código' }}</li>
            <li class="list-group-item">Nombre: {{ $persona->nombre | strtoupper }}</li>
            <li class="list-group-item">Edad: {{ $persona->edad }}</li>
        </ul>
    </div>
</div>
@endsection('lateral')

@section('contenido')
<h2>Cursos de Formación ({{count ($cursos) }})</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Area</th>
            <th scope="col">Horas</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($cursos as $curso)
        <tr>
            <td>{{ $curso->nombre }}</td>
            <td>{{ $curso->area }}</td>
            <td>{{ $curso->horas }}</td>
        </tr>
        @empty
    <h2>No hay Cursos Registrado</h2>
    @endforelse
    @if (!empty ($cursos))
    <tr>
        <td>  Total Horas: {{ array_sum(array_column($cursos, 'horas')) }}</td>
    </tr>
    @endif
</tbody>
</table>
@endsection

@section('alerta')
@if (isset($error) && $error)
@component('alerta', ['title'=>'COMPONENT #1','color'=>'red'])
<strong>Ooooops</strong> Algo ha ido mal!
@endcomponent
@endif
@endsection('alerta')


@push('scripts')
<script>
    alert('I\'m coming from child');
</script>
@endpush
