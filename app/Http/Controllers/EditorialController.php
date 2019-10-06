<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editorial;
use App\Author;
use App\Book;

class EditorialController extends Controller
{
    /**
     * RETORNA TOTES LES EDITORIALS.
     */
    public function index(){
        $editorials = Editorial::all();

        return view('editorials.index', compact('editorials'));
    }

    /**
     * RETORNA EL FORMULARI PER CREAR UNA EDITORIAL.
     */
    public function create(){
        return view('editorials.create');
    }

    /**
     * EMMAGATZEMA UNA NOVA EDITORIAL.
     * $request => Dades entrades per l'usuari a la vista de creació d'editorial.
     */
    public function store(Request $request){
        
        $editorial = new Editorial;
        $editorial->name = $request->input('name');
        $editorial->save();

        return redirect()->route('editorials');
    }

    /**
     * OBTÉ LES EDITORIALS EN QUE HA PARTICIPAT UN AUTOR.
     */
    public function getEditorialsByAuthor($id){

        $author = Author::findOrFail($id);

        $editorials_id = $author->books()->groupBy('editorial_id')->select('editorial_id')->get();

        $editorials = Editorial::whereIn('id', $editorials_id)->get();

        $author_name = ' de '.$author->name;

        return view('editorials.index', compact('editorials', 'author_name'));
    }
}
