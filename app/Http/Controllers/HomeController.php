<?php

namespace App\Http\Controllers;

use App\Models\ItemTarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = DB::table('item_tareas')
            ->join('tareas', 'item_tareas.tarea_id', '=', 'tareas.id')
            ->join('materias', 'tareas.materia_id', '=', 'materias.id')
            ->select('item_tareas.*', 'tareas.nombre_tarea', 'materias.nombre')
            ->groupBy('item_tareas.fecha_entrega', 'item_tareas.id')
            ->orderBy('item_tareas.fecha_entrega', 'asc')
            ->where('item_tareas.estatus', '=', 0)
            ->where('materias.user_id', '=', Auth::user()->id)
            ->get();

        return view('home', compact('items'));
    }

    public function completado(ItemTarea $item){

        $item->estatus = 1;
        $item->update();

        return redirect()->route('home')
            ->with('success', 'Tarea completada con éxito');

    }
}
