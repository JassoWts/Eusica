<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\Ventas;
use Illuminate\Support\Facades\DB;


class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function inicioCategoria()
    {
        $categoria = Categorias::all();
        return view('categoriashome', ['categoria'=>$categoria]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function crearCategoria(Request $request)
    {
        $categoria= new Categorias();
        $categoria -> nom_categorias = $request -> categoria;

        $categoria->save();

        return redirect (route('inicioCategoria'))->with('status', 'Categoria creada exitosamente');

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edicionCategoria($ididcat)
    {
        $categoria=Categorias::find($ididcat);
        return view('editacategoria', ['categoria'=>$categoria]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function actualizaCategoria(Request $request, $ididcat)
    {
        $categoria=Categorias::find($ididcat);
        $categoria ->nom_categorias = $request -> categoria;
        $categoria->save();

        return redirect(route('inicioCategoria'))->with('status', 'Categoria actualizada exitosamente!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function eliminaCategoria($ididcat)
    {
        Categorias:: destroy($ididcat);
        return redirect(route('inicioCategoria'))->with('status', 'Categoria eliminado exitosamente!!');

    }

    public function consultaCategoria()
    {
        $categorias = Categorias::all();
        return view('leercategorias', ['categorias'=>$categorias]);


    }

    public function busquedaCategoria(Request $request)
    {
        $query = $request->input('query');
        if (isset($query)) {
            $categorias = DB::select("SELECT * FROM categorias WHERE nom_categorias LIKE '%$query%'");
            return view('leercategorias', ['categorias' => $categorias]);
        } else {
            return view('leercategorias', ['categorias' => []]);
        }

    }
}
