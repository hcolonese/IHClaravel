@extends('layout')


@section('cabecalho')
Adicionar Paciente
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
        <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        <label for="idade">Idade</label>
            <input type="int" class="form-control" name="idade" id="idade">
        <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf">
        <label for="psiResp">Psicólogo responsável</label>
            <input type="text" class="form-control" name="psiResp" id="psiResp">
    </div>
    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection