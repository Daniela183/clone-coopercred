<?php
require('fpdf.php');
include_once('../classes/manipuladados.php');
function convert($String){
    return iconv("UTF-8","ISO8859-1", $String);

}
$pdf = new FPDF("L","pt","A4");
$busca = new manipuladados();
$busca->setTable("tb_produto");
$linha = $busca->getAllDataTable();

$pdf->AddPage();
$pdf->Image("img/certificate.png", 0,0,$pdf->GetPageWidth(), $pdf->GetPageHeight());
$pdf->SetFont('Arial','',16);
$pdf->Ln(103); //pula linha

$pdf->Cell(20,10,'Produtos');
$pdf->Ln(30); //pula linha

foreach ($linha as $dados) {

$pdf->Ln(10);

$pdf->MultiCell(220,10, utf8_decode($dados["descricao"]).' - R$ '.$dados["valor"]);


}
$pdf->Ln(30);
$pdf->Cell(10,10,'Soma  dos valores:  R$');
$i = 0;
foreach ($linha as $dados) {

$pdf->Ln(-0.4);

$i = $i + $dados["valor"];


}

$pdf->SetX(200);
$pdf->MultiCell(1000,15, $i);

$pdf->Output('relatorio.pdf','i');
?>
