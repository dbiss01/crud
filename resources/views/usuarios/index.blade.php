@extends('usuarios.layout')
@section('content')
<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>CRUD <small>por Gustavo Samuel Marcolin</small></h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/usuario/create') }}" class="btn btn-success btn-sm" title="Novo Usuário">
                        <i class="bi bi-plus-lg"></i> Novo
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Data de nascimento</th>
                                    <th width="150">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($usuarios as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nome }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->data_nascimento }}</td>

                                    <td>
                                        <a href="{{ url('/usuario/' . $item->id . '/edit') }}" title="Editar usuário"><button class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></button></a>

                                        <form method="POST" action="{{ url('/usuario' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Excluir usuário" onclick="return confirm('Quer realmente excluir?')"><i class="bi bi-trash3"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection