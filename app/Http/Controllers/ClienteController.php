<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientehome',['clientes'=>$clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $cliente = new Cliente();
        $cliente ->nombre_client = $request -> nombre;
        $cliente ->appat_client = $request -> appat;
        $cliente ->apmat_client = $request -> apmat;
        $cliente ->telefono_client = $request -> telefono;
        
        $cliente -> save();

        return redirect(route('index'))->with('status', 'Cliente registrado exitosamente!!');
    }

   
    /**
     * Show the form for editing the specified resource.
     */
    public function edita($id)
    {
        $cliente=Cliente::find($id);
      return view('editacliente', ['cliente' => $cliente]);

    }

    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente ->nombre_client = $request -> nombre;
        $cliente ->appat_client = $request -> appat;
        $cliente ->apmat_client = $request -> apmat;
        $cliente ->telefono_client = $request -> telefono;
        $cliente ->save();

        return redirect(route('index'))->with('status', 'Cliente actualizado exitosamente!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Cliente::destroy($id);

        return redirect(route('index'))->with('status', 'Cliente eliminado exitosamente!!');
    }
    public function consultaClientes()
    {
        $clientes = Cliente::all();
        return view('leerclientes', ['clientes'=>$clientes]);


    }
    
    public function busquedaCliente(Request $request)
    {
        $query = $request->input('query');
        if (isset($query)) {
            $clientes = DB::select("SELECT * FROM clientes WHERE nombre_client LIKE '%$query%' OR appat_client LIKE '%$query%' OR apmat_client LIKE '%$query%' OR telefono_client LIKE '%$query%';");
            return view('leerclientes', ['clientes' => $clientes]);
        } else {
            return view('leerclientes', ['clientes' => []]);
        }

    }
}
