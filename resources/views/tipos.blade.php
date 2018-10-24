@extends('layouts.navbar', ["current"=>"tipos"])

@section('content')
<h1>Tipos</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    @foreach ($tipos as $t)
    <tbody>
        <tr>
            <td>{{ $t->id }}</td>
            <td>{{ $t->nome }}</td>
            <td>
                <a href="/editar/tipo/{{ $t->id }}" class="btn btn-primary btn-sm">Editar</a>
                <a href="/apagar/tipo/{{ $t->id }}" class="btn btn-danger btn-sm">Excluir</a>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>

<button type="button" class="btn btn-secondary btn-sm" onclick="window.location='{{ url('/novo/tipo') }}'">Adicionar</button>
@endsection
