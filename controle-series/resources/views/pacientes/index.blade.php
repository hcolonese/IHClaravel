@extends('layout')


@section('cabecalho')
Lista de Pacientes
@endsection

@section('conteudo')
@if(!empty($mensagem))
<div class="alert alert-success">
    {{$mensagem}}
</div>
@endif

<a href="{{ route('form_criar_paciente')}}" class="btn btn-dark mb-2">Adicionar</a>
<ul class="list-group">
    @foreach($pacientes as $paciente) 
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Nome: 
            {{ $paciente->nome }}
            <br>
            Idade: 
            {{$paciente->idade}}
            <span class="d-flex">
            <a href="/pacientes/{{$paciente->id}}/consultas" class="btn btn-info btn-sm mr-2">
                    <i class="fas fa-external-link-alt"></i>
            </a>
            <form method="post" action="/pacientes/{{ $paciente->id}}" onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes( $paciente->nome )}}?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">
                    <i class="far fa-trash-alt"></i>
                </button>
            </form>
            </span>
        </li>
    @endforeach
</ul>
@endsection