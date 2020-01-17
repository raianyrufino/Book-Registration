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

    public function create(){
        return view('livros.create');
    }

    public function read(Livro $livro){
        return view('livros.read',compact('livro'));
    }
    
    public function update(LivroRequest $request, $id){
        $livro = Livro::findOrFail($id);
        $livro->title        = $request->name;
        $livro->author       = $request->description;
        $livro->about        = $request->quantity;
        $livro->company      = $request->company;
        $livro->edition      = $request->edition;
        $livro->save();
        return redirect()->route('listar_series')->with('message', 'Product updated successfully!');
    }
    
    public function delete($id){
        $livro = Livro::findOrFail($id);
        $livro->delete();
        return redirect()->route('listar_series')->with('alert-success','Product hasbeen deleted!');
    }
}