@extends('layout')

@section('content')
    <h1>Nova Reserva</h1>
    <form action="{{ route('reservas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="quarto_id">Quarto:</label>
            <select name="quarto_id" id="quarto_id" class="form-control">
                @foreach ($quartos as $quarto)
                    <option value="{{ $quarto->id }}" {{ $quarto->id == $quartoSelecionado ? 'selected' : '' }}>
                        {{ $quarto->numero }} - {{ $quarto->tipo }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="data_reserva">Data da Reserva:</label>
            <input type="date" name="data_reserva" id="data_reserva" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('reservas.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
@endsection
