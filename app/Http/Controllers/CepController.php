<?php

namespace App\Http\Controllers;

use App\Models\Ceps;
use Illuminate\Http\Request;

class CepController extends Controller
{
    public function index()
    {
        $ceps = Ceps::todosCeps();

        return view('Admin.cep', [
            'ceps' => $ceps
        ]);
    }

    public function create()
    {
        return view('Admin.New.cep');
    }

    public function show(Request $request)
    {
        $cep = Ceps::where('id', $request->id)->first();

        return view('Admin.Edit.cep', ['cep' => $cep]);
    }

    public function salvar(Request $request)
    {
        try {
            Ceps::where('id', $request->id)
                ->update([
                    'cep' => $request->cep,
                    'numero_complemento' => $request->numero_complemento,
                    'rua' => $request->rua,
                    'bairro' => $request->bairro,
                    'cidade' => $request->cidade,
                    'uf' => $request->uf,
                    'status' => $request->status,
                    'alterado_por' => 'teste'
                ]);

            $cep = Ceps::where('id', $request->id)->first();

            \session()->flash('success', 'Salvo com sucesso !');

            return redirect(route('edit-cep', $cep));
        } catch (\Exception $exception){
            dd($exception);
            \session()->flash('errors', 'Ocorreu um erro ao salvar o cep !');

            return redirect(route('edit-cadastros', $cep));
        }
    }
}
