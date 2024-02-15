<?php
include ("../../classes/manipuladados.php");
function converte($string){
    return iconv("UTF-8", "ISO8859-1" , $string );
}

$titulo = $_POST["txtTitulo"];
$endereco = $_POST["txtEndereco"];


$nomearquivo = $_FILES['arquivo']['name'];
$urlbanco = "imgparceiro/".$nomearquivo;

$nomearquivosalvo = converte($_FILES['arquivo']['name']);
$urllocalsalvo = "../../imgparceiro/".$nomearquivosalvo;
move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);

echo  " Titulo: ".$titulo. "<br/> Endereco: ".$endereco. "<br/> URL: ".$urlbanco;


 $cadastra = new manipuladados();
 $cadastra->setTable("tb_parceiro");
 $cadastra->setFields("titulo, endereco, url");
 $cadastra->setDados("'$titulo','$endereco','$urlbanco'");
 $cadastra->insert();

 echo '<script>alert("'.$cadastra->getStatus().'");</script>';
 echo "<script>location = '../principal.php'; </script>";
 ?>
 <article>
 <h1><?=$row['titulo'];?></h1>
 <img class="ima" src="<?=$row['url']?>"/>
 <p>
     <?=$row['endereco'];?>
 </p>
 <p>
     <?=$row['url'];?>
 </p>
 <br/><br/>
 </article>
 