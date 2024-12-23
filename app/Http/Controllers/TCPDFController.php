<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCPDF;

class TCPDFController extends Controller
{
    public function generatepdf()
    {

        $data = [
            'title' => 'welcome to pdf page',
            'date' => date('m/d/y'),
        ]; 
        
        $html = view('generatepdf', $data)->render();
        $pdf = new TCPDF();
        $pdf->AddPage();
        $pdf->writeHTML($html, true, false, true, false, '');
        return response($pdf->Output('first.pdf', 'I'))
            ->header('Content-Type', 'application/pdf');
    }
}
