@extends('layouts.navbar', ['current'=>'tipos'])

@section('content')
    <h1>Editar Tipos</h1>

    <form action="/editar/tipo/{{ $tipo->id }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome do Tipo</label>
            <input type="text" class="form-control" name="nome" value="{{ $tipo->nome }}">
        </div>
        <button type="submit" class="btn btn-success btn-sm">Salvar</button>
        <button type="button" class="btn btn-danger btn-sm" onclick="window.location='{{ url('/tipos') }}'">Cancelar</button>
    </form>
@endsection
