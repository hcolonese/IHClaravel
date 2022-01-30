<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacientesFormRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{

    public function index() {
        return view ('usuarios.index');
    }
    
    public function log(Request $request) {
        return redirect()->route('listar_pacientes');
    }

    public function create() {
        return view ('usuarios.create');
    }

    public function store(Request $request) {
        $usuario = Usuario::create($request->all());
        $request->session()->flash("Usuario {$usuario->nome} criado com sucesso ");
        return redirect()->route('page_login');
    }

    // public function destroy(Request $request) {
    //     $paciente = Paciente::find($request->id);
    //     $nomePaciente = $paciente->nome;

    //     $paciente->consultas->each(function ($consulta) {
    //         $consulta->delete();
    
    //     });
    //     $paciente->delete();

    //     Paciente::destroy($request->id);
    //     $request->session()->flash('mensagem',"Paciente removido com sucesso");
    //     return redirect()->route('listar_pacientes');
    // }

}