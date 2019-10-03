<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();

        return view('authors.index', compact('authors'));
    }

    public function create(){
        return view('authors.create');
    }

    public function store(Request $request){
        
        $author = new Author;
        $author->name = $request->input('name');
        $author->save();

        return redirect()->route('authors');
    }
    
}
