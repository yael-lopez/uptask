<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\Tarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TareaController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = DB::table('tareas')
            ->join('materias', 'tareas.materia_id', '=', 'materias.id')
            ->select('tareas.*', 'materias.nombre')
            ->where('tareas.id_user', '=', 1)
            ->get();           

        return view('tareas.index', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materias = Materia::where('user_id', Auth::user()->id)->get();
        return view('tareas.create', compact('materias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string',
            'materia' => 'required'
        ]);

        $tarea = new Tarea();
        $tarea->nombre_tarea = $data["nombre"];
        $tarea->materia_id = $data["materia"];
        $tarea->id_user = Auth::user()->id;
        $tarea->save();

        return redirect()->route('tareas.index')
            ->with('success', 'Tarea agregada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        $materias = Materia::where('user_id', Auth::user()->id)->get();
        return view('tareas.edit', compact('tarea', 'materias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
        $data = $request->validate([
            'nombre' => 'required|string',
            'materia' => 'required'
        ]);

        $tarea->nombre_tarea = $data["nombre"];
        $tarea->materia_id = $data["materia"];
        $tarea->update();

        return redirect()->route('tareas.index')
            ->with('update', 'Tarea actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();

        return redirect()->route('tareas.index')
            ->with('delete', 'Tarea eliminada con éxito');
    }
}
