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

<div class="col align-items-center">
        <a href="/pacientes" class="btn btn-dark btn-sm me-2 ">
            <i class="fas fa-long-arrow-alt-left"></i>
        </a>
    </div>
<form method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        <label for="idade">Idade</label>
            <input type="int" class="form-control" name="idade" id="idade">
        <label for="cpf">Cadastro Único</label>
            <input type="text" class="form-control" name="cpf" id="cpf">
        <label for="psiResp">Psicólogo responsável</label>
            <input type="text" class="form-control" name="psiResp" id="psiResp">
    </div>
    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection