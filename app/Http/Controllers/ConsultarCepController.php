<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ConsultarCepController extends Controller
{
    public function index(Request $request)
    {
        try {
            $cep = $request->cep;

            $url = "https://viacep.com.br/ws/";

            $guzzle = new Client(['base_uri' => $url]);

            $response = $guzzle->request('GET', "{$cep}/json/");

            return response()->json(['data' => json_decode($response->getBody()), 'error' => false], Response::HTTP_OK);
        } catch (\Exception $exception) {
            return \response()->json(['error' => true],Response::HTTP_BAD_REQUEST);
        }
    }

    public function salvar(Request $request)
    {

    }
}
