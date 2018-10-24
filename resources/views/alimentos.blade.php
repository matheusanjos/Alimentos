@extends('layouts.navbar', ["current"=>"alimentos"])

@section('content')
    <h1>Alimentos</h1>

    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Fabricado em</th>
                <th scope="col">Tipo</th>
                <th scope="col">Validade</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alimentos as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->nome }}</td>
                    <td>{{ $a->data_fabricacao }}</td>
                    <td>{{ $a->tipo }}</td>
                    <td>{{ $a->data_vencimento }}</td>
                    <td>{{ $a->tipo_id }}</td>
                    <td>
                        <a href="/editar/alimento/{{ $a->id }}" class="btn btn-primary btn-sm">Editar</a>
                        <a href="/apagar/alimento/{{ $a->id }}" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <button type="button" class="btn btn-secondary btn-sm" onclick="window.location='{{ url('/novo/alimento') }}'">Adicionar</button>
@endsection
