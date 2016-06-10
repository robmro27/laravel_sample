<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    // for mass create
    protected $fillaable = ['body'];
    
    public function card() 
    {
        return $this->belongsTo(Card::class);
    }
}
