@extends('adminlte::page')

@section('title', 'Materias')

@section('content_header')
    <h1>Agregar item a la materia: Aplicaciones web</h1>
@stop

@section('content')
    <div class="container">
        <div class="card-outline card-success">
            <div class="card-header">
                <p>Formulario para agregar items</p>
            </div>
            <form method="POST">
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

                    <label for="descripcion">Descripcion</label>
                    <textarea class="form-control" rows="5" name="descripcion" id="descripcion">

                    </textarea>

                    <label for="imagen">Imagen</label>
                    <input type="file" class="form-control" name="imagen" id="imagen">

                    <label for="fecha_entrega">Fecha de entrega</label>
                    <input type="date" name="fecha_entrega" id="fecha_entrega" class="form-control">

                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-primary w-100" value="Agregar">
                </div>
            </form>
        </div>
    </div>
@stop
