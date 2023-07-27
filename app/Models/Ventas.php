<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;
    protected $primaryKey = 'idvta';

    //INICIO DE RELACIONES DE UNO A MUCHOS 

    public function detallesventa(){
        return $this->hasMany('App\Models\DetallesVTA');
    }

    //INICIO DE RELACIONES DE UNO A MUCHOS (inversa)

    public function productos(){
       return $this->belongsTo('App\Models\Producto');
    }

    public function Cliente(){
        return $this->belongsTo('App\Models\Cliente');
    }
    //FIN DE RELACIONES INVERSAS

}
