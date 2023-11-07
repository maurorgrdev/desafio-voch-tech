<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUnidadeRequest;
use App\Http\Requests\UpdateUnidadeRequest;
use App\Models\Unidade;
use App\Repositories\UnidadeRepository;
use App\Http\Controllers\BaseController;
use App\Http\Resources\UnidadeResource;
use Exception;

class UnidadeController extends BaseController
{
    protected $unidadeRepository;
    
    public function __construct(UnidadeRepository $unidadeRepository) {
        $this->unidadeRepository = $unidadeRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $unidades = $this->unidadeRepository->all();

            return $this->sendResponse(UnidadeResource::collection($unidades));
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), null, 400); 
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUnidadeRequest $request)
    {
        try {
            $dados = $request->all();

            $nova_unidade = $this->unidadeRepository->create($dados);

            return $this->sendResponse(new UnidadeResource($nova_unidade), null, 201);
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), null, 400); 
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $unidade = $this->unidadeRepository->find_by_id($id);

            return $this->sendResponse(new UnidadeResource($unidade));
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), null, 400); 
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUnidadeRequest $request, $id)
    {
        try {
            $dados = $request->all();

            $unidade_atualizada = $this->unidadeRepository->update($dados, $id);

            return $this->sendResponse(new UnidadeResource($unidade_atualizada));
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), null, 400); 
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $this->unidadeRepository->delete($id);

            return $this->sendResponse(null, 'Registro excluído com sucesso', 200);
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), null, 400); 
        }
    }
}
