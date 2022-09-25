<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protocolo extends Model
{
    use HasFactory;

    //relacion de muchos a muchos
    public function protocolosPlans()
    {
        return $this->belongsToMany('App\Models\Plan')
        ->withPivot('check1');
        
    } 
}
