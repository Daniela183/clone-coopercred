<?php

include_once("../../classes/manipuladados.php");

function converte($Strings)
{
    return iconv("UTF-8", "ISO8859-1", $Strings);
}

$id = $_POST['txtid'];



$nomearquivosalvo = converte($_FILES['arquivo']['name']);
$urlbanco = "img/" . $nomearquivosalvo;
$urllocalsalvo = "../../img/" . $nomearquivosalvo;
move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);

echo "URL:" .$urlbanco;

$alterar = new manipuladados();
$alterar->setTable("tb_imagem");
$alterar->setFields("url='$urlbanco'");
$alterar->setFieldId("id");
$alterar->setValueId($id);
$alterar->update();

echo '<script> alert("' . $alterar->getStatus() . '");</script>';
echo "<script> location = '../principal.php';</script>";
