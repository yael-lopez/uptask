@extends('adminlte::page')

@section('title', 'Materias')

@section('content_header')
    <h1>Administrar tareas</h1>
@stop

@section('content')

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>¡Exito!</strong> {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if(session('update'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>¡Exito!</strong> {{session('update')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if(session('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>¡Exito!</strong> {{session('delete')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

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

                        @foreach ($tareas as $tarea)

                            <tr>
                                <td> {{ $tarea->nombre_tarea }} </td>
                                <td> {{ $tarea->nombre }} </td>
                                <td>
                                    <a href="{{ route('tareas.edit', ['tarea' => $tarea->id]) }}" 
                                        class="btn btn-warning btn-sm w-100 mb-2">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('tareas.destroy', ['tarea' => $tarea->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            class="btn btn-danger btn-sm w-100 mb-2"
                                            onclick="return confirm('¿Deseas borrar este registro?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('item.index', ['tarea' => $tarea->id]) }}" class="btn btn-info btn-sm w-100">
                                        <i class="fas fa-plus-circle"></i>
                                    </a>
                                </td>
                            </tr>
                            
                        @endforeach

                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@stop
