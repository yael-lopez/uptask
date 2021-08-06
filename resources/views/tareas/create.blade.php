@extends('adminlte::page')

@section('title', 'Materias')

@section('content_header')
    <h1>Agregar tarea</h1>
@stop

@section('content')
    <div class="container">
        <div class="card-outline card-success">
            <div class="card-header">
                <p>Formulario para agregar tareas</p>
            </div>
            <form action="{{ route('tareas.store') }}" method="POST" novalidate>
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

                    <label for="materia">Materia</label>
                    <select class="form-control" name="materia" id="materia">
                        <option value="" disabled selected>-- Seleccione --</option>
                        @foreach ($materias as $materia)
                            <option {{ old('materia') == $materia->id ? 'selected' : '' }} 
                                value="{{ $materia->id }}">
                                {{ $materia->nombre }}
                            </option>
                        @endforeach
                    </select>
                    @error('materia')
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
