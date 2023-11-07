<?php

namespace App\Http\Controllers\Relatorios;

use App\Http\Controllers\BaseController;
use App\Repositories\ColaboradorCargoRepository;
use Exception;

class DesempenhoColaboradorController extends BaseController{
    protected $colaboradorCargoRepository;

    public function __construct(ColaboradorCargoRepository $colaboradorCargoRepository) {
        $this->colaboradorCargoRepository = $colaboradorCargoRepository;
    }


    public function colaboradoresMelhoresDesempenhosOrdemDecrescente(){
        try {
            $relatorio = $this->colaboradorCargoRepository->relario_colaboradores_melhores_desempenhos_ordem_decrescente();
            
            return $this->sendResponse($relatorio);
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), null, 400); 
        }
    }
}
