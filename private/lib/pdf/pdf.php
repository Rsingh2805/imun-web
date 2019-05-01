<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
ini_set("log_errors", 1);
ini_set("error_log", "error.log");
error_log( "Hello, errors!" );


require_once dirname(__FILE__).'/../../config.php';
require_once dirname(__FILE__).'/../../../vendor/autoload.php';


function getLOAPdf($full_name, $nationality){
    $pdf = new \setasign\Fpdi\Fpdi();
    $pdf->AddPage();
    $pdf->AddFont('Calibri');
    $path = dirname(__FILE__).'/loa1.pdf';
    $pdf->setSourceFile($path);

    $tplId1 = $pdf->importPage(1);
    $tplId2 = $pdf->importPage(2);
    $tplId3 = $pdf->importPage(3);
    $tplId4 = $pdf->importPage(4);

    $pdf->useTemplate($tplId1);

    $pdf->SetFont('Calibri', '', '12');
    $pdf->SetTextColor(0,0,0);

    $pdf->SetXY(70, 120);

    $pdf->Write(0, 'Rahul Singh');
    $pdf->SetXY(70, 128.5);
    $pdf->Write(0, 'Indian');
    $pdf->AddPage();
    $pdf->useTemplate($tplId2);
    $pdf->AddPage();
    $pdf->useTemplate($tplId3);
    $pdf->AddPage();
    $pdf->useTemplate($tplId4);

    return $pdf->Output('', 'S');
}
