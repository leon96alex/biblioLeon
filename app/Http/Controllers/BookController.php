<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;
use App\Editorial;

class BookController extends Controller
{
    /**
     * RETORNA TOTS ELS LLIBRES.
     */
    public function index(){

        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * RETORNA EL FORMULARI DE CREACIÓ D'UN LLIBRE.
     * Obtenim tots els autors i totes les editorials per a fer els selects corresponents a la vista.
     */
    public function create(){

        $authors = Author::all();
        $editorials = Editorial::all();

        return view('books.create', compact('authors', 'editorials'));
    }

    /**
     * EMMAGATZEMA UN NOU LLIBRE.
     * $request => Dades entrades per l'usuari a la vista de creació de llibre.
     */
    public function store(Request $request){

        $book = new Book;
        $book->name = $request->input('name');
        $book->author_id = $request->input('author');
        $book->editorial_id = $request->input('editorial');
        $book->price = $request->input('price');
        $book->units = $request->input('units');
        $book->save();

        return redirect()->route('books');
    }

    /**
     * OBTENIM TOTS ELS LLIBRES D'UN AUTOR CONCRET.
     * $id => Id de l'autor del que volem obtenir tots els llibres.
     */
    public function getBooksByAuthor($id){

        $author = Author::findOrFail($id);
        $books = $author->books;

        $author_name = ' de '.$author->name;

        return view('books.index', compact('books', 'author_name'));
    }

    /**
     * OBTENIM ELS LLIBRES QUE APLICANT-LI L'IVA DEL 21%, EL PREU ÉS MENOR DE 15€
     */
    public function getBooksInOffer()
    {
        $books = Book::whereRaw('(price * 1.21) < 15')->get();

        $author_name = " d'Oferta!";

        return view('books.index', compact('books', 'author_name'));
    }
}
