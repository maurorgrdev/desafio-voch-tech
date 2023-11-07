<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreColaboradorCargoRequest;
use App\Http\Requests\UpdateColaboradorCargoRequest;
use App\Http\Resources\ColaboradorCargoResource;
use App\Models\ColaboradorCargo;
use App\Repositories\ColaboradorCargoRepository;
use App\Repositories\ColaboradorRepository;
use Exception;

class ColaboradorCargoController extends BaseController
{
    protected $colaboradorCargoRepository;

    public function __construct(ColaboradorCargoRepository $colaboradorCargoRepository) {
        $this->colaboradorCargoRepository = $colaboradorCargoRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $results = $this->colaboradorCargoRepository->all();

            return $this->sendResponse(ColaboradorCargoResource::collection($results));
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), null, 400); 
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreColaboradorCargoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreColaboradorCargoRequest $request)
    {
        try {
            $dados = $request->all();

            $novo_colaborador_cargo = $this->colaboradorCargoRepository->create($dados);

            return $this->sendResponse(new ColaboradorCargoResource($novo_colaborador_cargo), null, 201);
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), null, 400); 
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateColaboradorCargoRequest  $request
     * @param  \App\Models\ColaboradorCargo  $colaboradorCargo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateColaboradorCargoRequest $request, $id)
    {
        try {
            $dados = $request->all();

            $colaborador_cargo_atualizado = $this->colaboradorCargoRepository->update($dados, $id);

            return $this->sendResponse(new ColaboradorCargoResource($colaborador_cargo_atualizado));
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), null, 400); 
        }
    }

}
