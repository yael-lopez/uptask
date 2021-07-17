<?php

use App\Http\Controllers\ItemTareaController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\TareaController;
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

/** Rutas para materias */
Route::get('/materias', [MateriaController::class, 'index'])->name('materias.index');
Route::get('/materias/create', [MateriaController::class, 'create'])->name('materias.create');
Route::post('/materias', [MateriaController::class, 'store'])->name('materias.store');
Route::get('/materias/{materia}/edit', [MateriaController::class, 'edit'])->name('materias.edit');

/** Rutas para tareas */
Route::get('/tareas', [TareaController::class, 'index'])->name('tareas.index');
Route::get('/tareas/create', [TareaController::class, 'create'])->name('tareas.create');

/** Rutas para agregar items a las tareas */
Route::get('/tareas/materia', [ItemTareaController::class, 'index'])->name('item.index');
Route::get('/tareas/materia/create', [ItemTareaController::class, 'create'])->name('item.create');