<?php

namespace App\Http\Controllers;

use App\Models\Cadastros;
use App\Models\Planos;
use Illuminate\Http\Request;

class CadastroClienteController extends Controller
{
    public function index(Request $request)
    {
        $planos = Planos::obterTodos();
        $plano_selecionado = null;

        if($request->get('plano')){
            $plano_atual = Planos::obterPorId((int) $request->get('plano'));
            $plano_selecionado = $plano_atual;
        }

        return view('cadastro', ['planos' => $planos, 'plano_selecionado' => $plano_selecionado]);
    }

    public function create(Request $request)
    {
        Cadastros::insert([
            'nome' => $request->name,
            'email' => $request->email,
            'cep' => $request->cep,
            'status' => 2,
            'plano' => $request->plano,
            'telefone' => $request->telefone,
            'telefone_2' => $request->telefone ?? null
        ]);
        
        return view('cadastro_finalizado', ['nome' => $request->name]);
    }
}
