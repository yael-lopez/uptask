@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
    <h1 class="text-center text-info text-uppercase">Proximas entregas</h1>
    <div class="card">
        <div class="card-header">Materia: Aplicaciones Web</div>
        <div class="card-body">
            <h4 class="text center">Nombre de la tarea: Proyecto final</h4>
            <p>Items:</p>
            <ul>
                <li>Crear las vistas del proyecto final</li>
                <li>Fecha de entrega: 2021/07/18</li>
            </ul>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary">Marcar como completada</button>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Materia: Aplicaciones Web</div>
        <div class="card-body">
            <h4 class="text center">Nombre de la tarea: Proyecto final</h4>
            <p>Items:</p>
            <ul>
                <li>Crear los controladores del proyecto final</li>
                <li>Fecha de entrega: 2021/07/23</li>
            </ul>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary">Marcar como completada</button>
        </div>
    </div>
</div>
@stop
