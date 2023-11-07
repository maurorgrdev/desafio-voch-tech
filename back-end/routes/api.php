<?php

use App\Http\Controllers\CargoController;
use App\Http\Controllers\ColaboradorCargoController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\Relatorios\ColaboradoresUnidadeCargoController;
use App\Http\Controllers\Relatorios\DesempenhoColaboradorController;
use App\Http\Controllers\Relatorios\TotalColaboradoresPorUnidadeController;
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

Route::resource('/unidade', UnidadeController::class);

Route::resource('/colaborador', ColaboradorController::class);

Route::resource('/cargo', CargoController::class);

Route::resource('/colaborador_cargo', ColaboradorCargoController::class);

Route::get('/relatorio-colaboradores-melhores-desempenhos', [DesempenhoColaboradorController::class, 'colaboradoresMelhoresDesempenhosOrdemDecrescente']);
Route::get('/relatorio-total-colaboladores-por-unidade', [TotalColaboradoresPorUnidadeController::class, 'totalColaboladoresPorUnidade']);
Route::get('/relatorio-colaboradores-unidade-cargo', [ColaboradoresUnidadeCargoController::class, 'colaboradoresUnidadeCargo']);