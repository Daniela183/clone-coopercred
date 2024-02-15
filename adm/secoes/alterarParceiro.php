<?php

include_once("../../classes/manipuladados.php");

function converte($Strings)
{
    return iconv("UTF-8", "ISO8859-1", $Strings);
}
$id = $_POST['txtId'];
$titulo = $_POST["txtTitulo"];
$endereco = $_POST["txtEndereco"];


$nomearquivosalvo = converte($_FILES['arquivo']['name']);
$urlbanco = "img/" . $nomearquivosalvo;
$urllocalsalvo = "../../img/" . $nomearquivosalvo;
move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);

echo "titulo: ".$titulo. "<br/> Endereço: ".$endereco. "<br/>URL:" .$urlbanco;

$alterar = new manipuladados();
$alterar->setTable("tb_parceiro");
$alterar->setFields("titulo= '$titulo', endereco='$endereco', url='$urlbanco'");
$alterar->setFieldId("id");
$alterar->setValueId($id);
$alterar->update();

echo '<script> alert("' . $alterar->getStatus() . '");</script>';
echo "<script> location = '../principal.php';</script>";
