<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editorial;

class EditorialController extends Controller
{
    public function index(){
        $editorials = Editorial::all();

        return view('editorials.index', compact('editorials'));
    }

    public function create(){
        return view('editorials.create');
    }

    public function store(Request $request){
        
        $editorial = new Editorial;
        $editorial->name = $request->input('name');
        $editorial->save();

        return redirect()->route('editorials');
    }
}
