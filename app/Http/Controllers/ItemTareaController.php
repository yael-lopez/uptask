<?php

namespace App\Http\Controllers;

use App\Models\ItemTarea;
use App\Models\Materia;
use App\Models\Tarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemTareaController extends Controller
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
    public function index(Tarea $tarea)
    {
        $materia = Materia::find($tarea->materia_id);
        $items = ItemTarea::where('tarea_id', $tarea->id)->get();
        return view('item.index', 
            compact('materia', 'tarea', 'items')
            );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tarea $tarea)
    {
        $materia = Materia::find($tarea->materia_id);
        return view('item.create', compact('tarea', 'materia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Tarea $tarea)
    {
        $data = $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'fecha_entrega' => 'required'
        ]);

        $item = new ItemTarea();
        $item->tarea_id = $tarea->id;
        $item->nombre = $data["nombre"];
        $item->descripcion = $data["descripcion"];
        $item->fecha_entrega = $data["fecha_entrega"];
        $item->estatus = 0;
        $item->save();

        return redirect()->route('item.index', ['tarea' => $tarea->id])
            ->with('success', 'Item creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemTarea  $itemTarea
     * @return \Illuminate\Http\Response
     */
    public function show(ItemTarea $itemTarea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemTarea  $itemTarea
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemTarea $itemTarea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ItemTarea  $itemTarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemTarea $itemTarea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemTarea  $itemTarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemTarea $itemTarea)
    {
        //
    }
}
