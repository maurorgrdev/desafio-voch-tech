<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColaboradorCargo extends Model
{
    use HasFactory;

    protected $table = 'colaborador_cargo';

    protected $fillable = [
        'colaborador_id',
        'cargo_id',
        'nota_desempenho',
    ];

    public $timestamps = true;

    public function cargo(){
        return $this->belongsTo(Cargo::class);
    }

    public function colaborador(){
        return $this->belongsTo(Colaborador::class);
    }
}
