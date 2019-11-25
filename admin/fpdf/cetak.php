<?php
	require 'fpdf.php';

	$db = new mysqli("localhost", "root", "", "icloud");

	$id=$_GET['id'];
	/**
	* 
	*/
	class PDF extends FPDF
	{
		
		function BasicTable($header, $data)
		{
			
			$this->SetFont('Arial', 'i',12); //i=italic
			foreach ($header as $col) 
				
				$this->Cell(45,7,$col,1);
				$this->Ln();
				$this->SetFont('Arial', 'B', 9);


			
			foreach ($data as $key => $value);

				$this->Cell(45, 7, $value['nama'],1); //width and height
				$this->Cell(45, 7, $value['tgl_lahir'],1);
				$this->Cell(45, 7, $value['nohp'],1);
				$this->Cell(45, 7, $value['keterangan'],1);
				$this->Ln();
				
				
		}
	}

$db = new mysqli("localhost", "root", "", "icloud");
$pdf = new PDF();
//coloumn heading
$header = array("Nama", "Tgl lahir", "No HP", "Keterangan");
//data loading
$data = $db->query("SELECT *from file where id='$id'");
$pdf->SetFont('Arial', 'B', 9);
$pdf->AddPage();
	foreach ($data as $key => $value);

$foto=$value['file'];

$pdf->Image('../files/'.$foto,90,10,25,0,'');

$pdf->Ln();
$pdf->Cell(0,9, '', '0', '1', 'C');
$pdf->Cell(0,9, '', '0', '1', 'C');
$pdf->Cell(0,9, '', '0', '1', 'C');
$pdf->Cell(0,5, 'PRAKTIKUM PWD Slot 16.30', '0', '1', 'C'); //spasi anatar baris. C= Center
$pdf->Cell(0,5, 'Gilang yuda pramana', '0', '1', 'C'); //spasi anatar baris. C= Center
$pdf->Cell(0,5, '[1500018112]', '0', '1', 'C'); //spasi anatar baris. C= Center

$pdf->Ln();
$pdf->Ln();
$pdf->BasicTable($header, $data);
$pdf->Ln(); //barias baru
$pdf->Cell(0,9, 'Dibuat pada', '0', '1', 'L'); 
$pdf->Cell(0,9,date('j-F-Y H:i:s'));
$pdf->Output();


?>

