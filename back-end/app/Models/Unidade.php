<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    use HasFactory;

    protected $table = 'unidades';

    protected $fillable = [
        'nome_fantasia',
        'razao_social',
        'cnpj',
    ];

    public $timestamps = true;

    public function colaboradores()
    { 
  
        return $this->belongsToMany(Colaborador::class);
    }
}
