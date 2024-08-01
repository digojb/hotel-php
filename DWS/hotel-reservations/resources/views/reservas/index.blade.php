@extends('layout')

@section('content')
    <div class="text-center">
        <h1>Minhas reservas</h1>
    </div>
    <a href="{{ route('reservas.create') }}" class="btn btn-success mb-3">Adicionar Nova Reserva</a>

    @if ($reservas->isEmpty())
    <div class="text-center mt-5">
            <img src="{{ asset('undraw_void_-3-ggu.svg') }}" alt="Página vazia" style="width: 250px; height: auto;">
            <p class="mt-3">Nenhuma reserva adicionada até o momento.</p>
        </div>
    @else
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
    @endif
@endsection
