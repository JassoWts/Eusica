<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    //INICIO DE RELACIONES DE UNO A MUCHOS 

       public function venta(){
        return $this->hasMany('App\Models\Ventas');
    }

    public function apartado(){
        return $this->hasMany('App\Models\ApartadosEspeciales');
    }

}
