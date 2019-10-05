<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;
use App\Editorial;

class BookController extends Controller
{
    public function index(){

        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create(){

        $authors = Author::all();
        $editorials = Editorial::all();

        return view('books.create', compact('authors', 'editorials'));
    }

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

    public function getBooksByAuthor($id){

        $author = Author::findOrFail($id);
        $books = Book::where('id', $id)->get();

        $author_name = ' de '.$author->name;

        //dd($books);
        return view('books.index', compact('books', 'author_name'));
    }
}
