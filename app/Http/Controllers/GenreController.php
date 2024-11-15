<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'mufaj'=>'required|string|max:255',
        ]);
        $mufaj = Question::create([
            'mufaj' => $request -> input('mufaj'),
        ]);
        
        return redirect()->back()->with('success','Az új műfajt létrehozta!');
    }
}
