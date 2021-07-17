@extends('adminlte::page')

@section('title', 'Materias')

@section('content_header')
    <h1>Agregar materia</h1>
@stop

@section('content')
    <div class="container">
        <div class="card-outline card-success">
            <div class="card-header">
                <p>Formulario para agregar materia</p>
            </div>
            <form method="POST" action="{{ route('materias.store') }}">
                @csrf
                <div class="card-body">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" value="{{ old('nombre') }}"
                        name="nombre" id="nombre">
                    @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong> {{$message}} </strong>
                        </span>
                    @enderror

                    <label for="descripcion">Descripción de la materia</label>
                    <textarea class="form-control" rows="5" name="descripcion" id="descripcion">
                        {{ old('descripcion') }}
                    </textarea>
                    @error('descripcion')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong> {{$message}} </strong>
                        </span>
                    @enderror
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-primary w-100" value="Agregar">
                </div>
            </form>
        </div>
    </div>
@stop
