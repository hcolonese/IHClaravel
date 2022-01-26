<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['data','objetivo','progresso_obtido1_10','analisePsiGeral1_10','paciente_id'];
    public function paciente()
    {
        return $this->belongsTo( related: Paciente::class);
    }
}
