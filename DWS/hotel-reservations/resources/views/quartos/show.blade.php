@extends('layout')

@section('content')
    <div class="text-center mb-4">
        <h1>Detalhes do Quarto</h1>
    </div>
    
    <div class="row" id="titulo">
        <div class="col-md-8">
            <img src="{{ $quarto->imagem }}" alt="Imagem do quarto" class="img-fluid" style="max-width: 100%; height: auto;">
        </div>
        <div class="col-md-4">
            <p><strong>Número:</strong> {{ $quarto->numero }}</p>
            <p><strong>Tipo:</strong> {{ $quarto->tipo }}</p>
            <p><strong>Preço:</strong> {{ $quarto->preco }}</p>
            <p><strong>Status:</strong> {{ $quarto->status }}</p>
            <a id="botao2" href="{{ route('quartos.edit', $quarto->id) }}" class="btn btn-primary">Editar</a>
            <form action="{{ route('quartos.destroy', $quarto->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button id="botao2" type="submit" class="btn btn-danger">Excluir</button>
            </form>
            <a id="botao" href="{{ route('quartos.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
    <style>
        .col-md-4 p{
            font-size: 20px;
        }
        #titulo {
            margin-top: 60px; 
        }
        #botao{
            margin-top: 325px;
        }
        #botao1{
            margin-top: 325px;
        }
        #botao2{
            margin-top: 325px;
        }
    </style>
@endsection
