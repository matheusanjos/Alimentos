@extends('layouts.navbar', ['current'=>'alimentos'])

@section('content')
    <h1>Editar Alimentos</h1>

    <form action="/editar/alimento/{{ $alimento->id }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome do Tipo</label>
            <input type="text" class="form-control" name="nome" value="{{ $alimento->nome }}">
        </div>

        <label for="fab">Data de Fabricação</label>
        <input type="date" class="form-control" name="fab">
        <br>

        <label for="tipo">Tipo</label>
        <br>
        <div class="form-check form-check-inline">
            <input id="per" class="form-check-input" type="radio" name="tipo" value="Perecível">
            <label class="form-check-label">Perecível</label>
        </div>
        <div class="form-check form-check-inline">
            <input id="imp" class="form-check-input" type="radio" name="tipo" value="Imperecível">
            <label class="form-check-label">Imperecível</label>
        </div>
        <br><br>

        <div id="vencimento">
            <label for="venc">Data de Vencimento</label>
            <input type="date" class="form-control" name="venc">
            <br>
        </div>

        <label for="cat">Categoria do Produto</label>
        <select name="cat" class="form-control">
            @foreach($cats as $c)
            <option value="{{$c->id}}">{{$c->nome}}</option>
            @endforeach
        </select>

        <br>

        <button type="submit" class="btn btn-success btn-sm">Salvar</button>
        <button type="button" class="btn btn-danger btn-sm" onclick="window.location='{{ url('/alimentos') }}'">Cancelar</button>
    </form>

    <script src="{{ asset('js/show.input.js') }}" defer></script>
@endsection
