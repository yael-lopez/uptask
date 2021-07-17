@extends('adminlte::page')

@section('title', 'Materias')

@section('content_header')
    <h1>Items de la materia: Aplicaciones web</h1>
@stop

@section('content')
    <div class="container">
        <div class="card-outline card-info">
            <div class="card-header">
                <a class="btn btn-primary" href="{{ route('item.create') }}">Agregar item</a>
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

                        <tr>
                            <td>Crear las vistas del proyecto final</td>
                            <td>Crear las vistas del proyecto final usando el framework de Laravel</td>
                            <td>Sin Imagen</td>
                            <td>2021/07/18</td>
                            <td>
                                <span class="btn btn-success btn-sm">completada</span>
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

                        <tr>
                            <td>Crear los controladores del proyecto final</td>
                            <td>Crear las controladores del proyecto final usando el framework de Laravel</td>
                            <td>Sin Imagen</td>
                            <td>2021/07/23</td>
                            <td>
                                <span class="btn btn-danger btn-sm">pendiente</span>
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

                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@stop
