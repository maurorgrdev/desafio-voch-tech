<?php

namespace App\Repositories;

use App\Models\ColaboradorCargo;
use Illuminate\Support\Facades\DB;

class ColaboradorCargoRepository extends AbstractRepository{
    
    protected $model = ColaboradorCargo::class;

    public function relario_colaboradores_melhores_desempenhos_ordem_decrescente(){
       $teste = DB::table('colaborador_cargo')
                ->join('colaboradores', 'colaboradores.id', '=', 'colaborador_cargo.colaborador_id')
                ->join('unidades', 'unidades.id', '=', 'colaboradores.unidade_id')
                ->join('cargos', 'cargos.id', '=', 'colaborador_cargo.cargo_id')
                ->select('colaboradores.nome', 'colaboradores.cpf', 'colaboradores.email', 'unidades.nome_fantasia', 'cargos.cargo', 'colaborador_cargo.nota_desempenho')
                ->orderBy('colaborador_cargo.nota_desempenho', 'desc')
                ->get();

        return $teste;
    }
}