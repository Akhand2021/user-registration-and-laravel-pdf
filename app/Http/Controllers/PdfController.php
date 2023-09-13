<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;
use PDF;


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
    public function index() 
    {
    	$pdf = PDF::loadView('pdf.sample-with-image', [
    		'title' => 'ALgocodersmind.com Laravel Pdf with Image Example',
    		'description' => 'This is an example Laravel pdf Image tutorial.',
    		'footer' => 'by <a href="https://algocodersmind.com">algocodersmind.com</a>'
    	]);
    
        return $pdf->download('sample-with-image.pdf');
    }
    
}
