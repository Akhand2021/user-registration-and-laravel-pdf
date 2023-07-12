<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;


class PdfController extends Controller
{
    public function generatePdf(Request $request)
    {
        // Get the HTML content to be converted to PDF
        $html = "<h1 style='text-align:center;'>ALgocodersmind|DomPDF|generate|</h1>";
        $html .= $request->input('html');
        
        // Instantiate Dompdf
        $dompdf = new Dompdf();
        
        // Load the HTML content
        $dompdf->loadHtml($html);
        
        // Set the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');
        
        // Render the PDF
        $dompdf->render();
        
        // Output the generated PDF to the browser
        return $dompdf->stream();
    }
    
}
