<?php
include "connection.php";
 require'fpdf181/fpdf.php';

if(isset($_GET["from-date"]) && isset($_GET["to-date"]))
{    

  // Default From Date
    if($_GET["from-date"] == "")
    {
      $fd='2011-01-01';
    }
    else
    {
      $fd=$_GET["from-date"];
    }

    // Default ToDate
    if($_GET["to-date"] == "")
    {
      $td= date('y-m-d');
    }
    else
    {
      $td=$_GET["to-date"];
    }
$result = mysqli_query($conn,"SELECT ID,department,comment FROM feedback where Date between '".$fd."' AND '".$td."' order by ID desc");

 $header = mysqli_query($conn,"SELECT `COLUMN_NAME`
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE  `TABLE_NAME`='feedback'
and `COLUMN_NAME` in ('ID','department','Date')");

// $header = [ID,department,comment];

// require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);   

foreach($header as $heading) 
{
    foreach($heading as $column_heading)
        $pdf->Cell(30,7,$column_heading,1);
}

foreach($result as $row) 
{
    $pdf->SetFont('Arial','',7);    
    $pdf->Ln();
    foreach($row as $column)
        $pdf->Cell(30,7,$column,1);
}

header('Content-Type: text/pdf');
    header('Content-Disposition: attachment; filename="abcdef";');
$pdf->Output();
}
?> 

