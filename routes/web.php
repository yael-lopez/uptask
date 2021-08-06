<?php

use App\Http\Controllers\ItemTareaController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\TareaController;
use App\Models\ItemTarea;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::put('/home/{item}', [App\Http\Controllers\HomeController::class, 'completado'])->name('home.completado');

/** Rutas para materias */
Route::get('/materias', [MateriaController::class, 'index'])->name('materias.index');
Route::get('/materias/create', [MateriaController::class, 'create'])->name('materias.create');
Route::post('/materias', [MateriaController::class, 'store'])->name('materias.store');
Route::get('/materias/{materia}/edit', [MateriaController::class, 'edit'])->name('materias.edit');
Route::put('/materias/{materia}', [MateriaController::class, 'update'])->name('materias.update');
Route::delete('/materias/{materia}', [MateriaController::class, 'destroy'])->name('materias.destroy');

/** Rutas para tareas */
Route::get('/tareas', [TareaController::class, 'index'])->name('tareas.index');
Route::get('/tareas/create', [TareaController::class, 'create'])->name('tareas.create');
Route::post('/tareas', [TareaController::class, 'store'])->name('tareas.store');
Route::get('/tareas/{tarea}/edit', [TareaController::class, 'edit'])->name('tareas.edit');
Route::put('/tareas/{tarea}', [TareaController::class, 'update'])->name('tareas.update');
Route::delete('/tareas/{tarea}', [TareaController::class, 'destroy'])->name('tareas.destroy');

/** Rutas para agregar items a las tareas */
Route::get('/tareas/{tarea}', [ItemTareaController::class, 'index'])->name('item.index');
Route::get('/tareas/{tarea}/create', [ItemTareaController::class, 'create'])->name('item.create');
Route::post('/tareas/{tarea}', [ItemTareaController::class, 'store'])->name('item.store');
Route::get('/tarea/{tarea}/{itemTarea}/edit', [ItemTarea::class. 'edit'])->name('item.edit');