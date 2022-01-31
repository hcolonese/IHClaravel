@extends('layout')


@section('cabecalho')

<div class="row d-flex justify-content-between align-items-center">
    <div class="col col-11">
        <h2>Consultas de {{$paciente->nome}}</h2>
    </div>
    <div class="col align-items-center">
        <a href="/pacientes" class="btn btn-dark btn-sm me-2 ">
            <i class="fas fa-long-arrow-alt-left"></i>
        </a>
    </div>
</div>

@endsection

@section('conteudo')
<ul class="list-group">
    <div class="row d-flex justify-content-end align-items-center" >
        <div class="col col-11 ">
            <h2>Criar nova Consulta</h2>
        </div>
        <div class="col">
            <a href="/pacientes/{{ $paciente->id}}/consultas/criar" class="btn btn-dark btn-sm mr-2">
            <i class="far fa-plus-square"></i>
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
            Estado Civil: {{ $consulta->estado_civil}}<br>
            Filhos: {{ $consulta->filhos}}<br>
            Quanto tempo está nessa situação: {{ $consulta->tempo}}<br>
            Onde se encontra atualmente: {{ $consulta->lugar}}<br>
            Vícios: {{ $consulta->vicios}}<br>
            Prescrição Médica: {{ $consulta->remedios}}<br>
            <form method="post" action="/pacientes/{{$paciente->id}}/consultas" onsubmit="return confirm('Tem certeza que deseja remover consulta do dia: {{ addslashes( $consulta->data )}}?')">
            <button class="btn btn-danger btn-sm me-4" type="submit" value="Delete">
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
