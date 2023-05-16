@extends('layouts.master')
@section('content')
    <div class="row">

        <div class="col-sm-4">

            {{-- TODO: Imagen genérica de los proyectos --}}

        </div>
        <div class="col-sm-8">

            {{-- TODO: Datos del proyecto --}}
            <h1>Datos del proyecto {{ $proyecto->nombre }}</h1>
            <h3>Nombre: {{ $proyecto->nombre }}</h3>
            <h5>Docente: {{ $proyecto->docente_id }}</h5>
            <a href='{{ url('/proyectos/edit/' . $proyecto->id ) }}' class='btn btn-primary'>Modificar proyecto</a>

        </div>
    </div>
@stop
