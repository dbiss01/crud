@extends('usuarios.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Adicionar Novo usuário</div>
    <div class="card-body">

        <form action="{{ url('usuario') }}" method="post">
            {!! csrf_field() !!}
            <label>Nome</label></br>
            <input type="text" name="nome" id="nome" class="form-control" required></br>
            <label>Email</label></br>
            <input type="text" name="email" id="email" class="form-control" required></br>
            <label>Senha</label></br>
            <input type="text" name="senha" id="senha" class="form-control" required></br>
            <label>data de nascimento</label></br>
            <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" required></br>
            <input type="submit" value="Salvar" class="btn btn-success">
            <a href="{{ url('/usuario') }}" class="btn btn-danger">Cancelar</a></br>
        </form>


    </div>
</div>

@stop