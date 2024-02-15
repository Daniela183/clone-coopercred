<?php
include ("../../classes/manipuladados.php");
function converte($string){
    return iconv("UTF-8", "ISO8859-1" , $string );
}

$descricao = $_POST["txtDescricao"];
$valor = $_POST["txtValor"];
$status = $_POST['rbTipo'];

$nomearquivo = $_FILES['arquivo']['name'];
$urlbanco = "imgcarretas/".$nomearquivo;

$nomearquivosalvo = converte($_FILES['arquivo']['name']);
$urllocalsalvo = "../../imgcarretas/".$nomearquivosalvo;
move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);

echo  " Descricao: ".$descricao. "<br/> Valor: ".$valor. "<br/> URL: ".$urlbanco;
echo $descricao;

 $cadastra = new manipuladados();
 $cadastra->setTable("tb_produto");
 $cadastra->setFields("descricao,valor,url,status");
 $cadastra->setDados("'$descricao','$valor','$urlbanco','$status'");
 $cadastra->insert();

 echo '<script>alert("'.$cadastra->getStatus().'");</script>';
 echo "<script>location = '../principal.php'; </script>";
 ?>
 

 