<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    //
    public function indexcliente()
    {
        $clientes = Cliente::all();
        //dd($clientes);
        
        return view('cliente.index',['clientes' => $clientes]);
    }
}
