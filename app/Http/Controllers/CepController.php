<?php

namespace App\Http\Controllers;

use App\Models\Ceps;
use Illuminate\Http\Request;

class CepController extends Controller
{
    public function index()
    {
        $ceps = Ceps::todosCeps();
        return view('Admin.cep', ['ceps' => $ceps]);
    }

    public function create()
    {
        return view('Admin.New.cep');
    }

    public function salvar(Request $request)
    {
        dd($request);
    }
}
