<?php

namespace App\Http\Controllers;

use App\Repositories\ColaboradorCargoRepository;
use Exception;

class RelatorioDesempenhoController extends BaseController{
    protected $colaboradorCargoRepository;

    public function __construct(ColaboradorCargoRepository $colaboradorCargoRepository) {
        $this->colaboradorCargoRepository = $colaboradorCargoRepository;
    }


    public function relarioColaboradoresMelhoresDesempenhosOrdemDecrescente(){
        try {
            $relatorio = $this->colaboradorCargoRepository->relario_colaboradores_melhores_desempenhos_ordem_decrescente();
            
            return $this->sendResponse($relatorio);
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), null, 400); 
        }
    }
}
