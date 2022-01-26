<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsultasFormRequest;
use App\Models\Consulta;
use App\Models\Paciente;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    public function index(int $pacienteId){
        $paciente = Paciente::find($pacienteId);
        $consultas = $paciente->consultas;
        return view ('consultas.index', compact('paciente','consultas'));
    }

    public function create(int $pacienteId) {
        $paciente = Paciente::find($pacienteId);
        return view ('consultas.create', compact('paciente'));
    }

    public function store(ConsultasFormRequest $request) {
        $consulta = Consulta::create($request->all());
        $pacienteId = $request->paciente_id;
        $request->session()->flash("Consulta id: {$consulta->id} criado com sucesso {$consulta->data}");
        return redirect()->route('listar_consultas', ['pacienteId' => $pacienteId]);
    }

    public function destroy(Request $request) {
        $paciente_id = $request->pacienteId;
        $consulta_id = $request->consultaId;
        Consulta::destroy($consulta_id);
        $request->session()->flash("Consulta removida com sucesso");
        return redirect()->route('listar_consultas', ['pacienteId' => $paciente_id]);
    }
}
