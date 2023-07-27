<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallesVTA extends Model
{
    use HasFactory;

    //RELACIONES DE UNO A MUCHOS (inversa)

    public function ventas(){
        return $this->belongsTo('App\Models\Ventas');
    }
}
