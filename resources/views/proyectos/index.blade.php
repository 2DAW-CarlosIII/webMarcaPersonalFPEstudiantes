@extends('layouts.master')
@section('content')
    <h1>TODOS LOS PROYECTOS</h1>

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
                    <a href="{{ url('/proyectos/show/' . $key - 1) }}"class="text-decoration-none text-reset">
                        <img src="https://picsum.photos/200/300/?random" class="card-img-top" alt="{{ $proyecto['nombre'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $proyecto['nombre'] }}</h5>
                            <p class="card-text">
                                {{ $proyecto['metadatos'] }}
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach

    </div>


@stop
