<?php
include_once("../classes/manipuladados.php");
function converte($string){
    return iconv("UTF-8", "ISO8859-1", $string);
}
$descricao = $_POST["txtDescricao"];
$valor = $_POST["txtValor"];
$status = $_POST['rbTipo'];

$nomearquivo = $_FILES['arquivo']['name'];
$urlbanco = "imgcarretas/".$nomearquivo;

$nomearquivosalvo = converte($_FILES['arquivo']['name']);
$urllocalsalvo = "../../imgcarretas/".$nomearquivosalvo;
move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);

if ($tipo == 1){
    echo "Nome: ".$descricao. "<br/> Tipo: Peça <br/>Preço: ".$valor. "<br/>URL:" .$urlbanco;

}else{
    echo "Nome: ".$descricao. "<br/> Tipo: Carreta <br/>Preço: ".$valor. "<br/>URL:" .$urlbanco;
}

 $altera = new manipuladados();
 $altera->setTable("tb_produto");
 $altera->setFields("descricao='$descricao',valor='$valor',status='$status',url='$urlbanco'");
 $altera->setFieldId("id");
 $altera->setValueId($id);
 $altera->update();
 echo '<script>alert("'.$altera->getStatus().'");</script>';
 echo "<script>location = 'principal.php'; </script>";
 ?>

 