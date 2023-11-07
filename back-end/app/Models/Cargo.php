<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = 'cargos';

    protected $fillable = [
        'cargo',
    ];

    public $timestamps = true;

    /**
     * The roles that belong to the user.
     */
    public function colaboradores()
    {
        return $this->belongsToMany(Colaborador::class, 'colaborador_cargo', 'cargo_id', 'colaborador_id');
    }
}
