@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">

    <h1 class="text-center text-info text-uppercase">Proximas entregas</h1>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>¡Exito!</strong> {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @foreach ($items as $item)
        
        <div class="card">
            <div class="card-header">Materia: {{ $item->nombre }} </div>
            <div class="card-body">
                <h4 class="text center">Nombre de la tarea: {{ $item->nombre_tarea }} </h4>
                <p>Items:</p>
                <ul>
                    <li>
                        {{ $item->descripcion }} - Fecha de entrega {{ $item->fecha_entrega }}
                    </li>
                </ul>
            </div>
            <div class="card-footer text-right">
                <form action="{{ route('home.completado', ['item' => $item->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <button type="submit" class="btn btn-primary">
                        Marcar como completada
                    </button>
                </form>
            </div>
        </div>

    @endforeach

</div>
@stop
