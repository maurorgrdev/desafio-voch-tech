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

    /**
     * Get the phone associated with the user.
     */
    public function unidade()
    {
        return $this->belongsTo(Unidade::class);
    }

    /**
     * The roles that belong to the user.
     */
    public function cargo()
    {
        return $this->belongsToMany(Cargo::class, 'colaborador_cargo', 'colaborador_id', 'cargo_id');
    }
}
