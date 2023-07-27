<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $primaryKey = 'idprod';
    // INICIO DE RELACIONES DE UNO A MUCHOS

    public function venta(){
        return $this->hasMany('App\Models\Ventas');
    }
    //FIN DE RELACIONES DE UNO A MUCHOS

    //INICIO DE RELACIONES DE UNO A MUCHOS (inversa)

    public function categoria(){
       return $this->belongsTo('App\Models\Categorias');
    }
    //FIN DE RELACIONES INVERSAS DE UNO A MUCHOS
}
