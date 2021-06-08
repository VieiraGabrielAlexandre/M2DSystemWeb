<?php

use App\Http\Controllers\CadastrosController;
use App\Http\Controllers\CepController;
use App\Http\Controllers\HomeController;
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

Route::prefix('admin')->middleware(['auth:sanctum', 'verified'])->group(function (){
    Route::get('/', function (){
        return redirect('admin/home');
    });
    Route::get('home', [HomeController::class, 'index'])->name('dashboard');
    Route::get('cadastros', [CadastrosController::class, 'index'])->name('cadastros');
    Route::get('ceps', [CepController::class, 'index'])->name('ceps');

    Route::prefix('edit')->group(function (){
        Route::get('cadastros/{id}', [CadastrosController::class, 'show'])->name('edit-cadastros');
    });

    Route::prefix('salvar')->group(function (){
        Route::post('cadastros/{id}', [CadastrosController::class, 'update'])->name('atualizar.cadastro');
    });
});
