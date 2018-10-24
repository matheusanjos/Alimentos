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
                <a href="/restaurar/tipo/{{ $t->id }}" class="btn btn-warning btn-sm">Restaurar</a>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection
