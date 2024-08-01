@extends('layout')

@section('content')
    <h1>Detalhes do Quarto</h1>
    <p>Número: {{ $quarto->numero }}</p>
    <p>Tipo: {{ $quarto->tipo }}</p>
    <p>Preço: {{ $quarto->preco }}</p>
    <p>Status: {{ $quarto->status }}</p>
    <p><img src="{{ $quarto->imagem }}" alt="Imagem do quarto" style="max-width: 300px;"></p>
    <a href="{{ route('quartos.edit', $quarto->id) }}" class="btn btn-primary">Editar</a>
    <form action="{{ route('quartos.destroy', $quarto->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
    <a href="{{ route('quartos.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
