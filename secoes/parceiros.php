<?php
include_once("classes/manipuladados.php");
//include_once("validarcookie.php");
include_once("verurl.php");

?>

<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Coopercred Implementos Rodoviários</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/app.css'>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
    <link rel='stylesheet' type='text/css' media='screen' href='css/app.css'>
    <script src='js/bootstrap.bundle.js'></script>


</head>

<body>

<section class="container">
    <div class="row justify-content-between">
    <?php
    $busca = new manipuladados();
    $busca->setTable("tb_parceiro");
    $resultado = $busca->getParceiro();
    while($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
    ?>
        <article class="col-lg-4 col-md-6 col-sm-12" style="margin-top: 5%;">
        <div class="card mb-3">
          <img src="<?=$row["url"];?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?=$row["titulo"];?></h5>
            <p class="card-text"><?=$row["endereco"];?></p>
          </div>
        </div>
      </article>
    <?php } ?>
      
    </div>
   
</body>

</html>