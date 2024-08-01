@extends('layout')

@section('content')
    <h1>Lista de Reservas</h1>
    <a href="{{ route('reservas.create') }}" class="btn btn-success mb-3">Adicionar Nova Reserva</a>
    <div class="row">
        @foreach ($reservas as $reserva)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if($reserva->quarto->imagem)
                        <img src="{{ asset($reserva->quarto->imagem) }}" class="card-img-top" alt="Imagem do quarto">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">Quarto: {{ $reserva->quarto->numero }} - {{ $reserva->quarto->tipo }}</h5>
                        <p class="card-text">Data da Reserva: {{ $reserva->data_reserva }}</p>
                        <a href="{{ route('reservas.show', $reserva->id) }}" class="btn btn-primary">Ver Detalhes</a>
                        <a href="{{ route('reservas.edit', $reserva->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
