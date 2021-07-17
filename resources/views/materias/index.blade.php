@extends('adminlte::page')

@section('title', 'Materias')

@section('content_header')
    <h1>Administrar materias</h1>
@stop

@section('content')
    <div class="container">
        <div class="card-outline card-info">
            <div class="card-header">
                <a class="btn btn-primary" href="{{ route('materias.create') }}">Agregar materia</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Aplicaciones web</td>
                            <td>Aplicaciones web para la industria</td>
                            <td>
                                <a href="{{ route('materias.edit', ['materia' => 1]) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form method="POST">
                                    <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Deseas borrar este registro?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>Desarrollo Movil Multiplataforma</td>
                            <td>Desarrollo Movil Multiplataforma</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form method="POST">
                                    <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Deseas borrar este registro?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@stop
