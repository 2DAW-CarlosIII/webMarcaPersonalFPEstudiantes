@extends('layouts.master')
@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h1>NUEVO PROYECTO</h1>
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ url('/proyectos/create') }}" method="POST">

                        @csrf
                        <div class="form-group">
                            <label for="title">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="title">Docente</label>
                            <input type="text" name="docente" id="docente" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="title">Repositorio</label>
                            <input type="text" name="url_github" id="url_github" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="title">Metadatos</label>
                            <input type="text" name="metadatos" id="metadatos" class="form-control">
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Añadir Proyecto
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
