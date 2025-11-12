<?php

namespace App\Http\Controllers\Admin\Ajuste;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Troglodita;
use Illuminate\Support\Facades\Auth;

class ContaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $troglodita = Troglodita::where('user_id',Auth::user()->id)->first();

        // usuario tem conta troglodita
        if(isset($troglodita->status) && $troglodita->status == 'validado')
        {

        }

        if(isset($troglodita->status) && $troglodita->status == 'pendente')
        {
            return view('admin.ajuste.conta.troglodita-notificacao');
        }

        return view('admin.ajuste.conta.index');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
