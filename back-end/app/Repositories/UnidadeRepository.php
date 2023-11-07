<?php

namespace App\Repositories;

use App\Models\Unidade;
use App\Repositories\AbstractRepository;
use Illuminate\Support\Facades\DB;

class UnidadeRepository extends AbstractRepository{
    
    protected $model = Unidade::class;

    public function total_colaboradores_por_unidade(){
        $teste = DB::table('unidades')
                ->select('unidades.*')
                ->selectSub(function ($query) {
                    $query->from('colaboradores')
                            ->selectRaw('COUNT(*)')
                            ->whereRaw('`unidades`.`id` = `colaboradores`.`unidade_id`');
                }, 'total_colaboradores')
                ->get();

        return $teste;
    }
}