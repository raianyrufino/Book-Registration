<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivrosFormRequest;
use App\Livro;
use Illuminate\Http\Request;

class BooksController extends Controller{

    public function index() {
        $livros = Livro::all();

        return view('livros.index', compact('livros'));
    }

    public function create($id = null){
        if (!is_null($id)) {
            $livro = Livro::findOrFail($id);
            return view('livros.create', compact('id', 'livro'));
        }
        $livro = null;
        return view('livros.create', compact('id', 'livro'));
    }

    public function store(Request $request){
        $livro = Livro::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "Livro {$livro->id} criada com sucesso {$livro->title}"
            );
        return redirect()->route('listar_livros');
    }

    public function read($id){
        $livro = Livro::findOrFail($id);
        return view('livros.read',compact('livro'));
    }
    
    public function update(Request $request){
        $livro = Livro::findOrFail($request->id);
        $livro->title        = $request->title;
        $livro->author       = $request->author;
        $livro->about        = $request->about;
        $livro->company      = $request->company;
        $livro->edition      = $request->edition;
        $livro->save();
        return redirect()->route('listar_livros')->with('message', 'Product updated successfully!');
    }
    
    public function delete($id){
        $livro = Livro::findOrFail($id);
        $livro->delete();
        return redirect()->route('listar_livros')->with('alert-success','Product hasbeen deleted!');
    }
}