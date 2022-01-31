<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nome','idade','cpf','psiResp'];

    public function consultas()
    {
        return $this->hasMany(Consulta::class);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}