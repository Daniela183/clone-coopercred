<?php
include_once("validarcookie.php");
include_once("verurl.php");
?>

<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Area Administrador</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/pag.css'>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
    <script src='../js/bootstrap.bundle.js'></script>
</head>
<body>
    <header>
  
    <?php include "include/menu.php"; ?>
    </header>
    

    <section>
        <article>
            <?php
                $red = new verurl();
                $red->trocarUrl(@$_GET['secao']);
            ?>
        </article>
    </section>
    <footer>
        <?php include "include/rodape.php"?>
    </footer>

</body>

</html>