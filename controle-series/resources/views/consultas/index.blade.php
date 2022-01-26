@extends('layout')


@section('cabecalho')

<div class="row d-flex justify-content-end align-items-center">
    <div class="col col-7">
        Consultas de {{$paciente->nome}}
    </div>
    <div class="col col-2 mt-2">
        <h2>Voltar</h2>
    </div>
    <div class="col col-3">
        <a href="/pacientes" class="btn btn-info btn-sm mr-2 ">
            <i class="fas fa-external-link-alt"></i>
        </a>
    </div>
</div>

@endsection

@section('conteudo')
<ul class="list-group">
    <div class="row d-flex justify-content-end align-items-center" style="background-color: #40d9f7;">
        <div class="col col-11 ">
            <h2>Criar nova Consulta</h2>
        </div>
        <div class="col">
            <a href="/pacientes/{{ $paciente->id}}/consultas/criar" class="btn btn-info btn-sm mr-2">
                <i class="fas fa-external-link-alt"></i>
            </a>
        </div>
    </div>
    <div class="row">
    @if(isset($consultas))
    @foreach($consultas as $consulta) 
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Consulta  do dia: {{ $consulta->data}}<br>
            Com objetivo: {{ $consulta->objetivo}}<br>
            Avaliação do Progresso obtido: {{$consulta->progresso_obtido1_10}}<br>
            Análise psicológica geral: {{$consulta->analisePsiGeral1_10}}<br>
            <form method="post" action="/pacientes/{{$paciente->id}}/consultas" onsubmit="return confirm('Tem certeza que deseja remover consulta do dia: {{ addslashes( $consulta->data )}}?')">
            <button class="btn btn-danger btn-sm ml-2" type="submit" value="Delete">
                        <i class="far fa-trash-alt"></i>
            </button>
            <input type="hidden" name="consultaId" value="{{$consulta->id}}" />
            <input type="hidden" name="pacienteId" value="{{$paciente->id}}" />
            <input type="hidden" name="_method" value="delete" />
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>  
        </li>
    @endforeach
    @endif
    </div>
</ul>
@endsection
