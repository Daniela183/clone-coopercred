<?php

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

    <header>
        <?php include "includes/topocommenu.php"; ?>
    </header>

    <section>
        <!--<h1>Página Principal</h1>-->
        <article>
            <?php
            $red = new verURL();
            $red->trocarUrl(@$_GET['secao']);


            ?>
        </article>
    </section>
    <footer>
        <?php include "includes/rodape.php"; ?>
    </footer>



</body>

</html>