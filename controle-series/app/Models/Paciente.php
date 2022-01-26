<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome','idade','cpf'];

    public function consultas()
    {
        return $this->hasMany( related: Consulta::class);
    }
}