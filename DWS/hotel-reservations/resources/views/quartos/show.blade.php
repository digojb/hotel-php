@extends('layout')

@section('content')
    <div class="text-center mb-4">
        <h1>Detalhes do Quarto</h1>
    </div>
    <div class="row" id="titulo">
        <div class="col-md-8">
            <img src="{{ $quarto->imagem }}" alt="Imagem do quarto" class="img-fluid" style="max-width: 100%; height: auto;">
        </div>
        <div class="col-md-4 d-flex flex-column justify-content-between">
            <div class="quarto-detalhes">
                <h4>Número</h4>
                <p>{{ $quarto->numero }}</p>
                <h4>Tipo</h4>
                <p>{{ $quarto->tipo }}</p>
                <h4>Preço</h4>
                <p>R${{ $quarto->preco}}</p>
                <h4>Status</h4>
                <p>{{ $quarto->status }}</p>
                <div class="mt-auto">
                @auth
                    <a id="botao2" href="{{ route('quartos.edit', $quarto->id) }}" class="btn btn-primary me-2">Editar</a>
                    <form action="{{ route('quartos.destroy', $quarto->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button id="botao2" type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                @endauth
                <a id="botao" href="{{ route('quartos.index') }}" class="btn btn-secondary">Voltar</a>
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
            margin-top: 100px;
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
