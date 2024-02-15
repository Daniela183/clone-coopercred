<!--<?php
?>
<html>
    <body>
        <h1>Bem vindo a área do Administrador</h1>
    </body>
</html>
<?php ?>
<html>-->

<body>


  <section class="container shadow p-3 mb-5 bg-body rounded" style="margin-top: 11.6%;">
    <h1 style="text-align: center;">Bem vindo a aréa do Administrador</h1>
    <br><br>
    <div class="row justify-content-between">

      <article class="col-sm-12">
        <?php
        session_start();
        //$usuario = $_SESSION["usuario"];<!--. $usuario .<ul>Adicionar </ul><ul>Alterar </ul>--> 
       // echo '<h4>Bem vindo </h4><br>'

        ?>
        <h5>Você pode:
          <ul>
            <ul>Adicionar Produtos e Peças</ul>
            <ul>Alterar Imagens e Parceiros</ul>
          </ul>
        </h5>
      </article>

    </div>
  </section>
</body>

</html>