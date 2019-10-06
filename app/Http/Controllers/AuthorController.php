<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    /**
     * OBTENIM TOTS ELS AUTORS.
     */
    public function index(){
        $authors = Author::all();

        return view('authors.index', compact('authors'));
    }

    /**
     * ENVIA LA VISTA DE CREACIÓ DE AUTOR.
     */
    public function create(){
        return view('authors.create');
    }

    /**
     * EMMAGATZEMA UN NOU AUTOR.
     * $request => Dades entrades per l'usuari a la vista de creació d'autor.
     */
    public function store(Request $request){
        
        $author = new Author;
        $author->name = $request->input('name');
        $author->save();

        return redirect()->route('authors');
    }
    
}
