<?php
require 'vendor/autoload.php';

// Read HTML content from file
$htmlContent = file_get_contents('draft_prelease_offer_ICT_New.html');

// Create TCPDF instance
$pdf = new TCPDF();

// Set document information
$pdf->SetCreator('Your Name');
$pdf->SetTitle('Draft Prelease offer ICT_New v7.6');

// Add a page
$pdf->AddPage('A4');
$pdf->setCellPaddings(5, 5, 5, 5);


// Convert HTML to PDF
$pdf->writeHTML($htmlContent, true, false, true, false, '');

// Output PDF to the browser or save to a file
$pdf->Output('output.pdf', 'I'); 
