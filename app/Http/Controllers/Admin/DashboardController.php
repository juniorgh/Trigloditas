<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {

        //verifica se é novo usuário ou não
        $status = count(Cliente::where('user_id',Auth::user()->id)->get());

        if($status > 0) 
        {
            return view('admin.dashboard');
        } else {
            return view('admin.cliente.create', [
                'user_id' => Auth::user()->id
            ]);
        }
    }
}
