@extends('layout')

@section('cabecalho')
    Adicionar Livro
@endsection

@section('conteudo')
    <form method="post"  action="{{ $livro ? '/livros/atualizar' :'/livros/adicionar' }}">
        @csrf
        <div class="form-group">

            @if (!is_null($id))
                @method('PUT')
                <input type="hidden" value="{{ $id }}" name="id">
            @endif

            <label for="nome">Title</label>
            <input type="text" class="form-control" value="{{$livro ? $livro->title : '' }}" name="title" id="title">

            <label for="nome">Author</label>
            <input type="text" class="form-control" value="{{$livro ? $livro->author : '' }}" name="author" id="author">

            <label for="nome">About</label>
            <input type="text" class="form-control" value="{{$livro ? $livro->about : '' }}" name="about" id="about">

            <label for="nome">Company</label>
            <input type="text" class="form-control" value="{{$livro ? $livro->company : '' }}" name="company" id="company">

            <label for="nome">Edition</label>
            <input type="text" class="form-control" value="{{$livro ? $livro->edition : '' }}" name="edition" id="edition">
        </div>
        <button class="btn btn-primary">Adicionar</button>
    </form>
@endsection
