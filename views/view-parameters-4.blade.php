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
@component('ficha-empleado', ['persona' => $persona])
@endcomponent
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
@if ($error ?? false)
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
