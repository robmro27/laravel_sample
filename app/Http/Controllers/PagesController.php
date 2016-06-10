<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home() 
    {
        $people = ["Robert","Kamil","Michał"];
        
        return view('pages.welcome', compact('people'));
    }
    
    public function about() {
        
        return view('pages.about');
        
    }
    
}
