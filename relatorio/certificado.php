<?php
$con = mysqli_connect("localhost:3398","root","","db_certificados");
$listagem = mysqli_query($con,"SELECT * FROM tb_view");
require "../fpdf/fdpf.php";

function convert($String){
    return iconv("UTF-8","ISO8859-1", $String);
}
$pdf = new FPDF("L","pt","A4");
//$pdf->Cell(0,20,"texto",1,"C",false);
while ($linha = mysqli_fetch_array($listagem)){
    //frente do certificado
    $pdf->AddPage();
    $pdf->Image("../img/certificado.png", 0,0,$pdf->GetPageWidth(), $pdf->GetPageHeight());
    $pdf->Ln(30);

    //recuperar view
    $projeto = $linha["projeto"];
    $posicao = $linha["pos"];
    $area = $linha["area"];
    $nivel = $linha["nivel"];

    $pdf->SetFont("Arial", "", 18);
    $pdf->SetY(220);
    $pdf->SetMargins(20,20,20,20);
    $texto = "I SEMANA NACIONAL DO MEIO AMBIENTE DO IFG, realizada entre os dias 07 e 11 de junho de 2022.";
    $texto2 = "Confere o presente certificado aos participantes";

    $pdf->MultiCell(0,20,$texto, 0, "C", false);
    $pdf-> Ln(10);
    $pdf->MultiCell(0,20,$texto2, 0, "C", false);
    $pdf-> Ln(20);

    $pdf->SetFont("Arial", "B", 20);
    $pdf->MultiCell(0,20,utf8_decode($projeto), 0, "C", false);
    $pdf-> Ln(20);

    
    $texto3 = utf8_decode("pelo".$posicao."º lugar na categoria ".$area. " de nível ".$nivel);
    $pdf->MultiCell(0,20,$texto3, 0, "C", false);
    $pdf-> Ln(20);

    $pdf->MultiCell(0,20,"Formosa GO, 20 de Junho de 2022",0, "C", false);
    $pdf-> Ln(20);

    //verso do certificado
    $pdf->AddPage();
    $pdf->Image("../img/certificadov.png", 0,0,$pdf->GetPageWidth(), $pdf->GetPageHeight());
    $pdf->SetFont("Arial", "", 14);
    $pdf->SetX(0);
    $pdf->SetY(140);
    $pdf->MultiCell(0,15,utf8_decode("Instituto Federal de Ciência e ", 0, "J", false));
    $pdf-> Ln(3);
    $pdf->MultiCell(0,15,utf8_decode("Tecnologia de Goiás - IFG", 0, "J", false));
    $pdf-> Ln(3);
    $pdf->MultiCell(0,15,utf8_decode("Campus Formosa", 0, "J", false));
    $pdf-> Ln(20);
    $pdf->MultiCell(0,30,utf8_decode("Registrado sob nº____ na folha____", 0, "J", false));
    $pdf-> Ln(3);
    $pdf->MultiCell(0,30,utf8_decode("do livro___ de Registro de certificados", 0, "J", false));
    $pdf->Ln(30);
    $pdf->MultiCell(0,15,utf8_decode("Formosa GO, 20 de Junho de 2022", 0, "J", false));
    $pdf->Ln(30);
    $pdf->MultiCell(0,15,utf8_decode("Octo Oliveira", 0, "J", false));
    $pdf->MultiCell(0,15,"Portaria 1.250/2020", 0, "J", false);
}
    $pdf->Output("certificado.pdf","i");
?>