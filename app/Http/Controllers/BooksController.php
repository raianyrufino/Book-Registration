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

    public function create()
    {
        return view('livros.create');
    }


}