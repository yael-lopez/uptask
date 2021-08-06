<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MateriaController extends Controller
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
        $materias = Materia::where('user_id', Auth::user()->id)->get();
        return view('materias.index', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materias.create');
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
            'descripcion' => 'required|string'
        ]);

        $materia = new Materia();
        $materia->user_id = Auth::user()->id;
        $materia->nombre = $data["nombre"];
        $materia->descripcion = $data["descripcion"];
        $materia->save();

        return redirect()->route('materias.index')
            ->with('success', 'Materia creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materia)
    {
        return view('materias.edit', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
        $data = $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string'
        ]);

        $materia->nombre = $data["nombre"];
        $materia->descripcion = $data["descripcion"];
        $materia->update();

        return redirect()->route('materias.index')
            ->with('update', 'Materia actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        $materia->delete();
        return redirect()->route('materias.index')
            ->with('delete', 'Materia eliminada con éxito');
    }
}
