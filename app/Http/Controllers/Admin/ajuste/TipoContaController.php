<?php

namespace App\Http\Controllers\Admin\Ajuste;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Troglodita;
use Illuminate\Support\Facades\Auth;
use App\Mail\Admin\Ajuste\Conta\VerificacaoContaProEmail;
use Illuminate\Support\Facades\Mail;


class TipoContaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $troglodita = Troglodita::where('user_id',Auth::user()->id)->first();

        // if($troglodita->status == 'pendente')
        // {
        //     return view('admin.ajuste.conta.troglodita-notificacao');
        // }

        return view('admin.ajuste.conta.tipo-conta',
        [
            'user_id' => Auth::user()->id
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

        $nome = Auth::user()->name;
        $email = Auth::user()->email;
        $data = date("d/m/Y");
        $url = 'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . "/admin/ajuste/conta/tipo-conta/validador-conta-pro";
        $msg = "clique no link para validar seu e-mail, e concluir a ativação da sua conta profissional <br><br>" . $url;

        $status = $troglodita->save();

        if($status)
        {
            Mail::to(Auth::user()->email)->send(new VerificacaoContaProEmail($nome, $email, $data, $msg));
        }

        return redirect()->route('admin.ajuste.conta.index');
    }


    public function validarContaPro()
    {
        $troglodita = Troglodita::where('user_id',Auth::user()->id)->first();

        $troglodita->status = 'validado';

        $troglodita->update();

        return redirect()->route('admin.dashboard');
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
