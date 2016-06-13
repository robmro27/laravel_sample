<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Note;
use App\Card;
use Validator;

class NotesController extends Controller
{
    
    public function store(Request $request, Card $card) 
    {
        
        $this->validate($request, [
            'body' => 'required|min:10'
        ]);
        
        $note = new Note;
        $note->body = $request->body;
        
        $card->addNote( $note, 1 ); 
        
        return back();
    }
    
    public function edit(Note $note) 
    {
        return view('notes.edit', compact('note'));
    }
    
    public function update(Request $request, Note $note) 
    {
        $note->update($request->all());
        
        return back();
    }
    
}
