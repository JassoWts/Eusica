<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use App\Models\Categorias;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function inicioProducto()
    {
        $categorias= Categorias::pluck('nom_categorias', 'idcat');

        return view('productohome', compact('categorias'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function crearProducto( Request $request)
    {
        $producto=new Producto();
        $producto -> nom_prod = $request -> nomprod;
        $producto -> marca_prod = $request -> nommarca;
        $producto -> modelo_prod =$request -> modelo;
        $producto -> precio_prod = $request -> precio;
        $producto -> categoria_id= $request->categoria;
        $producto->save();
        

        return redirect(route('inicioProducto'))->with([
            'status' => 'Producto registrado exitosamente'
            ]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editarProducto($idprod)
    {
        $producto= Producto::find($idprod);
        
        $categorias= Categorias::pluck('nom_categorias', 'idcat');
        return view('editaproducto', compact('producto', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function actualizaProducto(Request $request, $idprod)
    {
        $producto= Producto::find($idprod);
        $producto -> nom_prod = $request -> nomprod;
        $producto -> marca_prod = $request -> nommarca;
        $producto -> modelo_prod =$request -> modelo;
        $producto -> precio_prod = $request -> precio;
        $producto -> categoria_id= $request->categoria;
        $producto->save();
        return redirect(route('inicioProducto'))->with([
            'status' => 'Producto actualizado exitosamente'
            ]); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function eliminaProducto(string $idprod)
    {
        Producto::destroy($idprod);
        return redirect(route('inicioProducto'))->with([
            'status' => 'Producto eliminado exitosamente'
            ]); 
    }

    public function consultaProducto()
    {
        $producto=DB::select('SELECT * FROM productos INNER JOIN categorias ON productos.categoria_id = categorias.idcat ORDER BY productos.idprod ASC;');
        return view('leerproductos', compact('producto'));


    }

    public function busquedaProducto(Request $request)
    {
        $query = $request->input('query');
        if (isset($query)) {
            $producto = DB::select("SELECT * FROM productos WHERE nom_prod LIKE '%$query%' OR marca_prod LIKE '%$query%' OR modelo_prod LIKE '%$query%' OR precio_prod LIKE '%$query%' ;");
            return view('leerproductos', ['producto' => $producto]);
        } else {
            return view('leerproductos', ['producto' => []]);
        }

    }
}
