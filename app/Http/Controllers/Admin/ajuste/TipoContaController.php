<?php

namespace App\Http\Controllers\admin\ajuste;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Troglodita;
use Illuminate\Support\Facades\Auth;

class TipoContaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::user()->id;

        return view('admin.ajuste.conta.tipo-conta', [
            'user_id' => $user_id
        ]);
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
        $troglodita = new Troglodita();

        $troglodita->foto_profissional = $request->foto_profissional;
        $troglodita->cpf = $request->cpf;
        $troglodita->data_nascimento = $request->data_nascimento;
        $troglodita->user_id = $request->user_id;

        $troglodita->save();

        return redirect()->route('admin.ajuste.conta.index');
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
