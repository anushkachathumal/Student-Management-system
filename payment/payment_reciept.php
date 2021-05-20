<?php

session_start();

    $studentName = $_SESSION['studentName'];
    $month = $_SESSION['month'];
    $totalFee = $_SESSION['totalFee'];
   //echo $_SESSION['array']; 


    require("fpdf/fpdf.php");
    $pdf=new FPDF();
    $pdf->AddPage();

    $pdf->SetFont("Arial","",15);
    $pdf->Cell(0,10,"Wisdom Institution - Payment Reciept",0,1);
    $pdf->SetFont("Arial","",11);
    $pdf->Cell(50,10,"Student Name: {$studentName}",0,1);
    $pdf->Cell(10,10,"Month: {$month}",0,1);
    
    
    $checkbox1=$_SESSION['subjects'];
    $chk="";  
    $total_fee = 0;

    foreach($checkbox1 as $chk1)  
    {  
    $pdf->Cell(10,10,"{$chk1} - 1000.00",0,1);
     //$total_fee = $total_fee+1000;
    }  
 
    
    
    
    $pdf->Cell(10,10,"Total fee: Rs: {$totalFee}.00",0,1);
    
    $pdf->output();


?>
