<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacientesFormRequest;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacientesController extends Controller
{

    public function index(Request $request) {
        $pacientes = Paciente::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');
        return view ('pacientes.index', compact('pacientes','mensagem'));
    }
    
    public function create() {
        return view ('pacientes.create');
    }

    public function store(PacientesFormRequest $request) {
        $paciente = Paciente::create($request->all());
        $request->session()->flash('mensagem',"Paciente {$paciente->nome} criado com sucesso ");
        return redirect()->route('listar_pacientes');
    }

    public function destroy(Request $request) {
        $paciente = Paciente::find($request->id);
        $nomePaciente = $paciente->nome;

        $paciente->consultas->each(function ($consulta) {
            $consulta->delete();
    
        });
        $paciente->delete();

        Paciente::destroy($request->id);
        $request->session()->flash('mensagem',"Paciente removido com sucesso");
        return redirect()->route('listar_pacientes');
    }

}