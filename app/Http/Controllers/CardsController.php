<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Card;

class CardsController extends Controller
{
    public function index( ) {
        
        //$cards = DB::table('cards')->get();
        $cards = Card::all();
        return view('cards.index', compact('cards'));
        
    }
    
    public function show( Card $card ) {
        
        //$card = Card::find($id);
        return view('cards.show', compact('card'));
        
    }
    
}
