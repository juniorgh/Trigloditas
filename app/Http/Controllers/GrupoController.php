<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoregrupoRequest;
use App\Http\Requests\UpdategrupoRequest;
use App\Models\grupo;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('oii');
        // return view('admin.grupo.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoregrupoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(grupo $grupo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(grupo $grupo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdategrupoRequest $request, grupo $grupo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(grupo $grupo)
    {
        //
    }
}
