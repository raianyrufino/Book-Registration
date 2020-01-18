@extends('layout')

@section('cabecalho')
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">       
                <h2>Details</h2>
            </div>
        </div>
@endsection

@section('conteudo')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $livro->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Author:</strong>
                {{ $livro->author }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>About:</strong>
                {{ $livro->about }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Company:</strong>
                {{ $livro->company }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Edition:</strong>
                {{ $livro->edition }}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('listar_livros') }}"> Back</a>
        </div>
    </div>
@endsection