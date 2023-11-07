<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreColaboradorRequest;
use App\Http\Requests\UpdateColaboradorRequest;
use App\Http\Resources\ColaboradorResource;
use App\Models\Colaborador;
use App\Repositories\ColaboradorRepository;
use Exception;

class ColaboradorController extends BaseController
{
    protected $colaboradorRepository;

    public function __construct(ColaboradorRepository $colaboradorRepository) {
        $this->colaboradorRepository = $colaboradorRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $colaborador = $this->colaboradorRepository->all();

            return $this->sendResponse(ColaboradorResource::collection($colaborador));
        } catch (Exception $e) {
            return $this->sendError(null, $e->getMessage(), 400); 
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreColaboradorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreColaboradorRequest $request)
    {
        try {
            $dados = $request->all();

            $novo_colaborador = $this->colaboradorRepository->create($dados);

            return $this->sendResponse(new ColaboradorResource($novo_colaborador), null, 201);
        } catch (Exception $e) {
            return $this->sendError(null, $e->getMessage(), 400); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Colaborador  $colaborador
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        try {
            $colaborador = $this->colaboradorRepository->find_by_id($id);

            return $this->sendResponse(new ColaboradorResource($colaborador));
        } catch (Exception $e) {
            return $this->sendError(null, $e->getMessage(), 400); 
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateColaboradorRequest  $request
     * @param  \App\Models\Colaborador  $colaborador
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateColaboradorRequest $request, $id)
    {
        try {
            $dados = $request->all();

            $colaborador_atualizado = $this->colaboradorRepository->update($dados, $id);

            return $this->sendResponse(new ColaboradorResource($colaborador_atualizado));
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), null, 400); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Colaborador  $colaborador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->colaboradorRepository->delete($id);

            return $this->sendResponse(null, 'Registro excluído com sucesso', 200);
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), null, 400); 
        }
    }
}
