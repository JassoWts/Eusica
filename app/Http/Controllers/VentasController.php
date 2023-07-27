<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Ventas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function inicioVenta()
    {
        $clientes=Cliente::pluck('nombre_client','id');
        $productos=Producto::pluck('nom_prod','idprod');
        return view('ventashome', compact('clientes', 'productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function crearVenta(Request $request)
    {
        $ventas=new Ventas();
        $ventas -> fecha_vta = $request -> fventa;
        $ventas -> producto_id = $request -> producto;
        $ventas -> cliente_id= $request -> cliente;
        $ventas -> save();
        return redirect(route('inicioVenta'))->with([
            'status' => 'Venta registrada exitosamente'
            ]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editarVenta($idvta)
    {
        $ventas= Ventas::find($idvta);
        $clientes=Cliente::pluck('nombre_client','id');
        $productos=Producto::pluck('nom_prod','idprod');
        return view('editaventas', compact('ventas','clientes', 'productos'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function actualizaVenta(Request $request, $idvta)
    {
        $ventas= Ventas::find($idvta);

        $ventas -> fecha_vta = $request -> fventa;
        $ventas -> producto_id = $request -> producto;
        $ventas -> cliente_id= $request -> cliente;
        $ventas -> save();
        return redirect(route('inicioVenta'))->with([
            'status' => 'Venta actualizada exitosamente'
            ]);     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function eliminaVenta( $idvta)
    {
        Ventas::destroy($idvta);
        return redirect(route('inicioVenta'))->with([
            'status' => 'Venta eliminada exitosamente'
            ]);     
    }

  
         public function consultaVentas()
         {
            $ventas=DB::select('SELECT * FROM ventas vtas 
            INNER JOIN productos prod 
            ON vtas.producto_id = prod.idprod
            INNER JOIN clientes c
            ON vtas.cliente_id=c.id;');

            return view('leerventas', compact('ventas'));
         }
}
