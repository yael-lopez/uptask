@extends('adminlte::page')

@section('title', 'Materias')

@section('content_header')
    <h1>Administrar tareas</h1>
@stop

@section('content')
    <div class="container">
        <div class="card-outline card-info">
            <div class="card-header">
                <a class="btn btn-primary" href="{{ route('tareas.create') }}">Agregar tarea</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Materia</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Proyecto final</td>
                            <td>Aplicaciones web</td>
                            <td>
                                <a href="{{ route('materias.edit', ['materia' => 1]) }}" 
                                    class="btn btn-warning btn-sm w-100 mb-2">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form method="POST">
                                    <button type="submit"
                                        class="btn btn-danger btn-sm w-100 mb-2"
                                        onclick="return confirm('¿Deseas borrar este registro?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{ route('item.index') }}" class="btn btn-info btn-sm w-100">
                                    <i class="fas fa-plus-circle"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Trabajo de investigación final</td>
                            <td>Desarrollo Movil Multiplataforma</td>
                            <td>
                                <a href="{{ route('materias.edit', ['materia' => 1]) }}" 
                                    class="btn btn-warning btn-sm w-100 mb-2">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form method="POST">
                                    <button type="submit"
                                        class="btn btn-danger btn-sm w-100 mb-2"
                                        onclick="return confirm('¿Deseas borrar este registro?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="#" class="btn btn-info btn-sm w-100">
                                    <i class="fas fa-plus-circle"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@stop
