<?php

include_once("../../classes/manipuladados.php");

function converte ($Strings){
    return iconv("UTF-8", "ISO8859-1", $Strings);

}
$nomearquivosalvo = converte($_FILES['arquivo']['name']);
$urlbanco = "img/".$nomearquivosalvo;
$urllocalsalvo = "../../img/".$nomearquivosalvo;
move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);

$cadastra = new manipuladados();
$cadastra->setTable("tb_imagem");
$cadastra->setFields("url");
$cadastra->setDados("'$urlbanco'");
$cadastra->insert();

echo '<script> alert("'.$cadastra->getStatus().'");</script>';
echo "<script> location = '../principal.php';</script>";

