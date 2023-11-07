<?php

use App\Http\Controllers\CargoController;
use App\Http\Controllers\ColaboradorCargoController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\RelatorioDesempenhoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UnidadeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/total-colaboladores-por-unidade', [UnidadeController::class, 'totalColaboladoresPorUnidade']);
Route::resource('/unidade', UnidadeController::class);

Route::resource('/colaborador', ColaboradorController::class);

Route::resource('/cargo', CargoController::class);

Route::resource('/colaborador_cargo', ColaboradorCargoController::class);

Route::get('/relatorio_colaboradores_melhores_desempenhos', [RelatorioDesempenhoController::class, 'relarioColaboradoresMelhoresDesempenhosOrdemDecrescente']);