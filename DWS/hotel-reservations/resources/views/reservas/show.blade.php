@extends('layout')

@section('content')
    <div class="text-center mb-4">
        <h1>Detalhes da Reserva</h1>
    </div>
    <div class="row" id="titulo">
        <div class="col-md-8">
            <img src="{{ $reserva->quarto->imagem }}" alt="Imagem do quarto" class="img-fluid" style="max-width: 100%; height: auto;">
        </div>
        <div class="col-md-4 d-flex flex-column justify-content-between">
            <div class="quarto-detalhes">
                <h4>Tipo</h4>
                <p>{{ $reserva->quarto->tipo }}</p>
                <h4>Numero</h4>
                <p>{{ $reserva->quarto->numero }}</p>
                <h4>Preço</h4>
                <p>R${{ $reserva->quarto->preco }}</p>
                <h4>Status</h4>
                <p>{{ $reserva->quarto->status }}</p>
                <h4>Data da Reserva</h4>
                <p>{{ $reserva->data_reserva }}</p>
                <div class="mt-auto">
                @auth
                    <a id="botao2" href="{{ route('reservas.edit', $reserva->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button id="botao1" type="submit" class="btn btn-danger ">Excluir</button>
                    </form>
                @endauth
                <a id="botao" href="{{ route('reservas.index') }}" class="btn btn-secondary">Voltar</a>
            </div>
            </div>

        </div>
    </div>
    <style>
        .col-md-4 .quarto-detalhes {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            height: 100%; /* Ensure it takes full height */
        }
        .quarto-detalhes h4 {
            font-size: 20px;
            margin-bottom: 5px;
            color: #333;
        }
        .quarto-detalhes p {
            font-size: 17px;
            margin-bottom: 15px;
            color: #555;
        }
        #titulo {
            margin-top: 60px; 
        }
        #botao, #botao1, #botao2 {
            margin-top: 20px;
        }
        .row {
            display: flex;
        }
        .col-md-4 {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .btn{
            margin-right: 32px;
        }
    </style>
@endsection
