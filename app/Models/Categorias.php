<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;
    protected $primaryKey = 'idcat';

    //INICIO DE RELACIONES DE UNO A MUCHOS
    public function productos(){
        return $this->hasMany( 'App\Models\Producto');
    }
}
