<?php


namespace App\Http\Controllers;


use App\Models\Cadastros;
use Illuminate\Database\Eloquent\Collection;

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
}
