<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function listBooks(){
        $books = Book::all();
        return view('books', compact('books'));
    }

    public function listBooksByAuthor(){
        return view('home');
    }
}
