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

<a href="/livros/adicionar" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    @foreach($livros as $livro)
    <li class="list-group-item"><?= $livro; ?></li>
    @endforeach
</ul>

@endsection