@extends('adminlte::page')

@section('title', 'Materias')

@section('content_header')
    <h1>Editar tarea</h1>
@stop

@section('content')
    <div class="container">
        <div class="card-outline card-success">
            <div class="card-header">
                <p>Formulario para editar tareas</p>
            </div>
            <form action="{{ route('tareas.update', ['tarea' => $tarea->id]) }}" method="POST" novalidate>
                @csrf
                @method('PUT')

                <div class="card-body">
                    
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" value="{{ $tarea->nombre_tarea }}"
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
                            <option {{ $tarea->materia_id == $materia->id ? 'selected' : '' }} 
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
                    <input type="submit" class="btn btn-success w-100" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
@stop
