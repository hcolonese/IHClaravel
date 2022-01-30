@extends('layout')


@section('cabecalho')
<div class="row d-flex justify-content-between align-items-center">
    <div class="col col-11">
        Lista de Pacientes
    </div>
    <div class="col align-items-center">
        <a href="/login" class="btn btn-dark btn-sm mb-2 ">
            <i class="fas fa-sign-out-alt"></i>
        </a>
    </div>
</div
@endsection

@section('conteudo')
@if(!empty($mensagem))
<div class="alert alert-success">
    {{$mensagem}}
</div>
@endif

<a href="{{ route('form_criar_paciente')}}" class="btn btn-dark mb-2">Adicionar</a>
<ul class="list-group">
    @if(isset($pacientes))
        @foreach($pacientes as $paciente) 
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Nome: 
                {{ $paciente->nome }}
                <br>
                Idade: 
                {{$paciente->idade}}
                <br>
                Psicólogo responsável: 
                {{$paciente->psiResp}}
                <span class="d-flex">
                <a href="/pacientes/{{$paciente->id}}/consultas" class="btn btn-dark btn-sm me-2">
                    <i class="fas fa-notes-medical"></i>
                </a>
                <form method="post" action="/pacientes/{{ $paciente->id}}" onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes( $paciente->nome )}}?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm me-2">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
                </span>
            </li>
        @endforeach
    @endif
</ul>
@endsection