<?php

namespace App\Http\Controllers\Relatorios;

use App\Http\Controllers\BaseController;
use App\Repositories\UnidadeRepository;
use Exception;

class TotalColaboradoresPorUnidadeController extends BaseController{
    protected $unidadeRepository;

    public function __construct(UnidadeRepository $unidadeRepository) {
        $this->unidadeRepository = $unidadeRepository;
    }


    public function totalColaboladoresPorUnidade(){
        try {
            $result = $this->unidadeRepository->total_colaboradores_por_unidade();

            return $this->sendResponse($result);
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), null, 400);
        }
    }
}