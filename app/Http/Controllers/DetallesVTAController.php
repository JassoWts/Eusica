<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;



class DetallesVTAController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function pdf()
    {


        $pdf = Pdf::loadView('DetallesVTA');
        return $pdf->download('DetallesVTA.pdf');
    //    $pdf = Pdf::loadVi
    //     return $pdf->download('invoice.pdf');

        // return view('DetallesVTA.');
    }

}
