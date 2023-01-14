<?php

namespace App\Http\Controllers;
use App\Models\driver;
use PDF;

class PDFController extends Controller
{
    // function to display preview
    public function preview()
    {
        $drivers = driver::all();
        return view('drivers', compact('drivers'));
    }

    public function generatePDF()
    {

        $drivers = driver::all();

        // share data to view
        view()->share('users-pdf',$drivers);
        $pdf = PDF::loadView('report', ['drivers' => $drivers]);
        return $pdf->download('driver.pdf');

        
    }
}