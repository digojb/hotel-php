@extends('layout')

@section('content')
    <h1>Detalhes da Reserva</h1>
    <p>Quarto: {{ $reserva->quarto->numero }} - {{ $reserva->quarto->tipo }}</p>
    <p>Data da Reserva: {{ $reserva->data_reserva }}</p>
    <a href="{{ route('reservas.edit', $reserva->id) }}" class="btn btn-primary">Editar</a>
    <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
    <a href="{{ route('reservas.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
