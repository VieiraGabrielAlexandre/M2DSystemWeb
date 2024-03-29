<?php

use App\Http\Controllers\CadastroClienteController;
use App\Http\Controllers\CadastrosController;
use App\Http\Controllers\CepController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/plans', function () {
    //return view('plans');
    return Redirect::to('https://sistema.m2dtelecom.com.br/index.php?tipo=ecommerce&page=produtos');
});

Route::get('/coverage', function () {
    return view('coverage');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/newsletter', function () {
    return view('newsletter');
});

Route::get('/clubesims', function () {
    return view('clubesims');
});

Route::prefix('cadastro')->group(function (){
    Route::get('/', [CadastroClienteController::class, 'index'])->name('cadastro.cliente');
    Route::post('/', [CadastroClienteController::class, 'create'])->name('salvar.cadastro.cliente');
});

Route::prefix('admin')->middleware(['auth:sanctum', 'verified'])->group(function (){
    Route::get('/', function (){
        return redirect('admin/home');
    });

    Route::get('home', [HomeController::class, 'index'])->name('dashboard');
    Route::get('cadastros', [CadastrosController::class, 'index'])->name('cadastros');
    Route::get('ceps', [CepController::class, 'index'])->name('ceps');
    Route::get('novo-cep', [CepController::class, 'create'])->name('novo-cep');
    Route::get('newsletter',[NewsletterController::class, 'show'])->name('newsletter');

    Route::prefix('edit')->group(function (){
        Route::get('cadastros/{id}', [CadastrosController::class, 'show'])->name('edit-cadastros');
        Route::get('ceps/{id}', [CepController::class, 'show'])->name('edit-cep');
    });

    Route::prefix('salvar')->group(function (){
        Route::post('cadastros/{id}', [CadastrosController::class, 'update'])->name('atualizar.cadastro');
        Route::post('cep', [CepController::class, 'salvar'])->name('salvar.cep');
        Route::put('cep', [CepController::class, 'update'])->name('atualizar.cep');
    });
});
