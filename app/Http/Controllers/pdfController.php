<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class pdfController extends Controller
{
    public function index()
    {
        return view('dompdf.invoice');
    }
    public function pdf($type = 'stream')
    {
        $pdf = PDF::loadView('dompdf.invoice-pdf');
        return $type == 'stream' ? $pdf->stream() : $pdf->download('invoice.pdf');
    }
}
