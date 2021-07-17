<?php

namespace App\Http\Controllers;

use App\Models\ItemTarea;
use Illuminate\Http\Request;

class ItemTareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('item.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
