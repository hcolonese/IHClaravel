@extends('layout')


@section('cabecalho')
Consultas de {{$paciente->nome}}
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
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm ml-2">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </form>
        </li>
    @endforeach
    @endif
    </div>
</ul>
@endsection
