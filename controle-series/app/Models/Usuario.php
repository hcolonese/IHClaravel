<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    public $fillable = ['email','senha','nome','crp','cpf','chaveAutent'];

    public function pacientes()
    {
        return $this->hasMany( related: Paciente::class);
    }
}