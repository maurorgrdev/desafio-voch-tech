<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCargoRequest;
use App\Http\Requests\UpdateCargoRequest;
use App\Http\Resources\CargoResource;
use App\Models\Cargo;
use App\Repositories\CargoRepository;
use Exception;

class CargoController extends BaseController
{
    protected $cargoRepository;

    public function __construct(CargoRepository $cargoRepository) {
        $this->cargoRepository = $cargoRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $cargo = $this->cargoRepository->all();

            return $this->sendResponse(CargoResource::collection($cargo));
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), null, 400); 
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCargoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCargoRequest $request)
    {
        try {
            $dados = $request->all();

            $novo_cargo = $this->cargoRepository->create($dados);

            return $this->sendResponse(new CargoResource($novo_cargo), null, 201);
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), null, 400); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        try {
            $cargo = $this->cargoRepository->find_by_id($id);

            return $this->sendResponse(new CargoResource($cargo));
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), null, 400); 
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCargoRequest  $request
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCargoRequest $request, $id)
    {
        try {
            $dados = $request->all();

            $cargo_atualizado = $this->cargoRepository->update($dados, $id);

            return $this->sendResponse(new CargoResource($cargo_atualizado));
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), null, 400); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->cargoRepository->delete($id);

            return $this->sendResponse(null, 'Registro excluído com sucesso', 200);
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), null, 400); 
        }
    }
}
