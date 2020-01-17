@extends('layout')

@section('cabecalho')
    Atualizar Livro
@endsection

@section('conteudo')
    <form action="{{ route('livros/atualizar',$livro->id) }}" method="POST">
    @csrf
    @method('PUT')

 <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            <input type="text" name="title" value="{{ $livro->title }}" class="form-control" placeholder="Title">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>About:</strong>
            <textarea class="form-control" style="height:150px" name="about" placeholder="About">{{ $livro->about }}</textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection