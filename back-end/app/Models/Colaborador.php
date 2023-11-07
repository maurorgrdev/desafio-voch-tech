<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    protected $table = 'colaboradores';

    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'unidade_id',
    ];

    public $timestamps = true;

    public function unidade(){
        return $this->hasOne(Unidade::class, 'unidade_id');
    }
}
