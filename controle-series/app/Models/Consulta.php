<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['data','objetivo','progresso_obtido1_10','analisePsiGeral1_10','paciente_id', 'estado_civil', 'tempo', 'lugar', 'vicios', 'remedios', 'filhos'];
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
