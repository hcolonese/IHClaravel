@extends('layout')

@section('cabecalho')
    Adicionar Consulta
@endsection

@section('conteudo')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST">
    @csrf
    <div class="form-group">
        <label for="data" >Data</label>
        <input type="text" class="form-control" name="data" id="data">

        <label for="objetivo" >Objetivo</label>
        <input type="text" class="form-control" name="objetivo" id="objetivo">

        <label for="progresso_obtido1_10" >Avaliação do Progresso obtido</label>
        <input type="int" class="form-control" name="progresso_obtido1_10" id="progresso_obtido1_10">

        <label for="analisePsiGeral1_10" >Análise psicológica geral</label>
        <input type="int" class="form-control" name="analisePsiGeral1_10" id="analisePsiGeral1_10">

        <input type="hidden" class="form-control" name="paciente_id" id="paciente_id" value="{{$paciente->id}}">
    </div>
    
    <button class="btn btn-primary mt-2">Adicionar</button>
</form>
@endsection
