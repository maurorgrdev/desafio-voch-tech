<?php

namespace App\Repositories;

use App\Models\Colaborador;
use Illuminate\Support\Facades\DB;

class ColaboradorRepository extends AbstractRepository{
    
    protected $model = Colaborador::class;

}