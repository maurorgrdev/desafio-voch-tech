<?php

namespace App\Http\Controllers\Relatorios;

use App\Http\Controllers\BaseController;
use App\Http\Resources\ColaboradorUnidadeCargoResource;
use App\Repositories\ColaboradorRepository;
use Exception;

class ColaboradoresUnidadeCargoController extends BaseController{
    protected $colaboradoRepository;

    public function __construct(ColaboradorRepository $colaboradoRepository) {
        $this->colaboradoRepository = $colaboradoRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function colaboradoresUnidadeCargo()
    {
        try {
            $colaboradores = $this->colaboradoRepository->all();

            return $this->sendResponse(ColaboradorUnidadeCargoResource::collection($colaboradores));
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), null, 400); 
        }
    }
}
