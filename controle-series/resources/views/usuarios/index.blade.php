@extends('layout')


@section('cabecalho')
Login
@endsection

@section('conteudo')
<form method="POST" >
    @csrf
    <div class="form-group">
        <label for="email" >Email</label>
        <input type="text" required class="form-control" name="email" id="email">

        <label for="senha" >Senha</label>
        <input type="password" class="form-control" name="senha" id="senha">
    </div>
    <button type="submit" class="btn btn-dark mt-2 ">
    <i class="fas fa-sign-in-alt"></i>
    </button>
</form> 
    <div class="d-flex justify-content-between align-items-center">
    
    <a href="/login/criar" class="btn btn-dark mt-2">
        Não tem login? Cadastre-se aqui
        <i class="fas fa-user-plus"></i>
    </a>
    </div>

@endsection