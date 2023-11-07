<?php

namespace App\Repositories;

use App\Models\Cargo;
use Illuminate\Support\Facades\DB;

class CargoRepository extends AbstractRepository{
    
    protected $model = Cargo::class;

    public function total_colaboradores_por_unidade(){
        $teste = DB::table('colaboradores')
                   ->join('unidades', 'colaboradores.unidade_id', '=', 'unidades.id')
                   ->select('colaboradores.*', 'unidades.nome_fantasia')
                   ->orderBy('total_colaboradores', 'desc')
                   ->get();

        return $teste;
    }
}