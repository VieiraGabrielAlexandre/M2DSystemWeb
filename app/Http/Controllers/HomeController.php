<?php

namespace App\Http\Controllers;

use App\Models\Cadastros;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request) {

        $cadastros = Cadastros::todosCadastros();
        $cadastros_negados = Cadastros::cadastrosNegados();
        $cadastros_analise = Cadastros::cadastrosEmAnalise();
        $cadastros_finalizados = Cadastros::cadastrosFinalizados();

        return view('Admin.dashboard', [
            'cadastros' => $cadastros->count(),
            'cadastros_negados' => $cadastros_negados->count(),
            'cadastros_analise' => $cadastros_analise->count(),
            'cadastros_finalizados' => $cadastros_finalizados->count()
        ]);
    }
}
