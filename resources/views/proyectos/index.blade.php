@extends('layouts.master')
@section('content')
<div class='d-flex justify-content-between align-items-center my-2'>
    <h1>TODOS LOS PROYECTOS</h1>
    <a href='/proyectos/create' class='btn btn-success'>Crear proyecto</a>
</div>

    <div class="row">
        @php
            $key = 0;
        @endphp
        @foreach ($arrayProyectos as $proyecto)
            @php
                $key++;
            @endphp
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                <div class="card">
                    <a href="{{ url('/proyectos/show/' . $proyecto->id ) }}"class="text-decoration-none text-reset">
                        <img src="https://picsum.photos/200/300/?random" class="card-img-top" alt="{{ $proyecto->nombre }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $proyecto->nombre }}</h5>
                            <p class="card-text">
                                {{ $proyecto->metadatos }}
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach

    </div>


@stop
