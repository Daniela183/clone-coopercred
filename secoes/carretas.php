<?php

//include_once("validarcookie.php");
include_once("verurl.php");
include ("classes/manipuladados.php");

?>

<html>

<body>

  <section class="container">
    <div class="row justify-content-between">
    <?php
    $busca = new manipuladados();
    $busca->setTable("tb_produto");
    $resultado = $busca->getCarretas();
    while($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
    ?>
        <article class="col-lg-4 col-md-6 col-sm-12" style="margin-top: 5%;">
        <div class="card mb-3">
          <img src="<?=$row["url"];?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?=$row["descricao"];?></h5>
            <p class="card-text"><?=$row["valor"];?></p>
          </div>
        </div>
      </article>
    <?php } ?>
      
    </div>
  </section>
   
</body>

</html>