@extends('adminlte::page')

@section('title', 'Materias')

@section('content_header')
    <h1>Administrar materias</h1>
@stop

@section('content')
    <div class="container">

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
                        @foreach ($materias as $materia)
                            
                            <tr>
                                <td> {{ $materia->nombre }} </td>
                                <td> {{ $materia->descripcion }} </td>
                                <td>
                                    <a href="{{ route('materias.edit', ['materia' => $materia->id]) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('materias.destroy', ['materia' => $materia->id]) }}"
                                         method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('¿Deseas borrar este registro?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@stop
