@extends('layout')

@section('content')
    <h1>Editar Quarto</h1>
    <form action="{{ route('quartos.update', $quarto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="numero">Número:</label>
            <input type="text" name="numero" id="numero" value="{{ $quarto->numero }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <input type="text" name="tipo" id="tipo" value="{{ $quarto->tipo }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="text" name="preco" id="preco" value="{{ $quarto->preco }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" name="status" id="status" value="{{ $quarto->status }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="imagem">Imagem:</label>
            <input type="text" name="imagem" id="imagem" value="{{ $quarto->imagem }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('quartos.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
@endsection
