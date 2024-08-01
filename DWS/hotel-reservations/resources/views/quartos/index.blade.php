@extends('layout')

@section('content')
    <div class="text-center">
        <h1>Lista de Quartos</h1>
    </div>
    <a href="{{ route('quartos.create') }}" class="btn btn-success mb-3">Adicionar Quarto</a>
    
    @if ($quartos->isEmpty())
        <div class="text-center mt-5">
            <img src="{{ asset('undraw_void_-3-ggu.svg') }}" alt="Página vazia" style="width: 250px; height: auto;">
            <p class="mt-3">Nenhum quarto disponível no momento. Por favor, adicione novos quartos.</p>
        </div>
    @else
        <div class="row">
            @foreach ($quartos as $quarto)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if($quarto->imagem)
                            <img src="{{ asset($quarto->imagem) }}" class="card-img-top" alt="Imagem do quarto">
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $quarto->tipo }}</h5>
                            <p class="card-text">R${{ $quarto->preco }} por noite</p>
                            <p class="card-text">Numero: {{ $quarto->numero }}</p>
                            <p class="card-text">Tipo: {{ $quarto->tipo }}</p>
                            <p class="card-text">Status: {{ $quarto->status }}</p>
                            <div class="mt-auto d-flex justify-content-between">
                                <a href="{{ route('reservas.create', ['quarto_id' => $quarto->id]) }}" class="btn btn-success">Reservar</a>
                                <a href="{{ route('quartos.show', $quarto->id) }}" class="btn btn-primary">Ver Detalhes</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection

<style>
    .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .card {
        display: flex;
        flex-direction: column;
    }

    .card-body {
        flex: 1 1 auto;
    }
</style>
