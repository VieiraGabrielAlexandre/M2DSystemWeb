<?php


namespace App\Http\Controllers;


use App\Models\Cadastros;
use Illuminate\Http\Request;

class CadastrosController extends Controller
{
    public function index()
    {
        $soma = 0;

        $cadastros = Cadastros::all()->each(function ($cadastro) use (&$soma){
            $soma = $soma + 1;
        });

        return view('Admin.cadastros', ['soma' => $soma, 'cadastros' => $cadastros]);
    }

    public function show(Request $request)
    {
        $cadastro = Cadastros::where('id', $request->id)->first();

        return view('Admin.Edit.cadastros', ['cadastro' => $cadastro]);
    }

    public function update(Request $request)
    {
        Cadastros::where('id', $request->id)
            ->update([
                'nome' => $request->name,
                'status' => $request->status,
                'email' => $request->email,
                'plano' => $request->plano,
                'telefone' => $request->telefone,
                'telefone_2' => $request->telefone_2,
                'cep' => $request->cep
            ]);

        $cadastro = Cadastros::where('id', $request->id)->first();

        return view('Admin.Edit.cadastros', ['cadastro' => $cadastro]);
    }
}
