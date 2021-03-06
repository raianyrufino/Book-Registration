@extends('layout')

@section('cabecalho')
    Livros
@endsection

@section('conteudo')
@if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif

<a href="{{ route('form_criar_livro') }}" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    @foreach($livros as $livro)
    <li class="list-group-item d-flex justify-content-between align-items-center">
       <b> {{ $livro->title }} </b>
        <form method="post" action="/livros/{{ $livro->id }}"
              onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($livro->title) }}?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger"> Deletar
                <i class="far fa-trash-alt"></i>
            </button>
        </form>
        <a href="{{ route('form_criar_livro', $livro->id)  }}" class="btn btn-primary">Atualizar</a>
        <a href="{{ route('listar_livro', $livro->id)  }}" class="btn btn-primary">Visualizar</a>
    </li>

    @endforeach
</ul>
@endsection