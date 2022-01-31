@extends('layout')


@section('cabecalho')
Cadastro
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
        <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email">
        <label for="senha">Senha</label>
            <input type="text" class="form-control" name="senha" id="senha">
        <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        <label for="crp">CRP</label>
            <input type="text" class="form-control" name="crp" id="crp">
        <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf">
        <label for="chaveAutent">Pin de autenticação</label>
            <input type="text" class="form-control" name="chaveAutent" id="chaveAutent">    
    </div>
    <button class="btn btn-primary">Adicionar</button>

    
</form>
<a href="/login" class="btn btn-dark mt-2">
        Já tem cadastro? Faça login aqui
        <i class="fas fa-user-plus"></i>
    </a>
@endsection