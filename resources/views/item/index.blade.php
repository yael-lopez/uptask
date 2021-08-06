@extends('adminlte::page')

@section('title', 'Materias')

@section('content_header')
    <h1>Items de la materia: {{ $materia->nombre }}</h1>
    <h4>Tarea: {{ $tarea->nombre_tarea }} </h4>
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
                <a class="btn btn-primary" href="{{ route('item.create', ['tarea' => $tarea->id]) }}">Agregar item</a>
                <a class="btn btn-danger" href="{{ route('tareas.index') }}">Volver</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Fecha de entrega</th>
                            <th scope="col">Estatus</th>
                            <th scope="col">Fecha de creación</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($items as $item)

                            <tr>
                                <td> {{ $item->nombre }} </td>
                                <td> {{ $item->descripcion }} </td>
                                <td>
                                    @if ($item->imagen != null)
                                        <p>Hay imagen</p>
                                    @else
                                        <p>No hay imagen</p>
                                    @endif
                                </td>
                                <td> {{ $item->fecha_entrega }} </td>
                                <td>
                                    @if ($item->estatus == 0)
                                        <span class="btn btn-danger btn-sm">pendiente</span>
                                    @else
                                        <span class="btn btn-success btn-sm">completada</span>
                                    @endif
                                </td>
                                <td>
                                    2021/07/14
                                </td>
                                <td>
                                    <a href="#" 
                                        class="btn btn-warning btn-sm w-100 mb-2">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form method="POST">
                                        <button type="submit"
                                            class="btn btn-danger btn-sm w-100 mb-2"
                                            onclick="return confirm('¿Deseas borrar este item?')">
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
