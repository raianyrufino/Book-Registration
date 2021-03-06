<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = ['id', 'title', 'author','about', 'company', 'edition'];
    protected $guarded = ['id', 'edition', 'author'];
    protected $table = 'livros';
}
