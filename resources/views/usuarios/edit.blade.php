@extends('usuarios.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Editando usuário</div>
    <div class="card-body">

        <form action="{{ url('usuario/' .$usuarios->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$usuarios->id}}" id="id" />
            <label>Nome</label></br>
            <input type="text" name="nome" id="nome" value="{{$usuarios->nome}}" class="form-control" required></br>
            <label>Email</label></br>
            <input type="text" name="email" id="email" value="{{$usuarios->email}}" class="form-control" required></br>
            <label>Senha</label></br>
            <input type="text" name="senha" id="senha" value="" class="form-control" required></br>
            <label>Data de nascimento</label></br>
            <input type="date" name="data_nascimento" id="data_nascimento" value="{{$usuarios->data_nascimento}}" class="form-control" required></br>

            <input type="submit" value="Salvar" class="btn btn-success">
            <a href="{{ url('/usuario') }}" class="btn btn-danger">Cancelar</a></br>
        </form>

    </div>
</div>

@stop