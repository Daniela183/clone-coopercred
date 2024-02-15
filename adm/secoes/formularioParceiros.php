<?php
include_once("../classes/manipuladados.php");
?>
<html>
      <body>
      <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-9 mx-auto">
             <div class="card border-0 shadow rounded-3 my-5">
             <div class="card-body p-4 p-sm-5">
             <h3 class="card-title text-center">Cadastrar Parceiros</h3>
  
		<form method="post" enctype="multipart/form-data" action="secoes/cadastrarParceiro.php"> 
            <div class="form-floating mb-3">
			<p><label for="titulo">Informe o Parceiro</label><p>
            <p><input type="text" name="txtTitulo"/></p>
            <p><label for="titulo">Informe o Endereço</label><p>
            <p><input type="text" name="txtEndereco"/></p>
            <p>
                <label>Selicione o Parceiro</label>
            </p>
                <p><input type="file" name="arquivo"/></p>
            </p>
            <p>
                <input type="submit" value="Enviar"/>
                <input type="reset" value="Limpar"/>
            </p>
		</form>
        <section>
    <?php
    $busca = new manipuladados();
    $busca->setTable("tb_parceiro");
    $resultado = $busca->getParceiro();
    while($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
    ?>
  
        <form action="secoes/verificarParceiro.php" method="POST" name="formulario">
            <tr>
                <td><?=$row["id"];?></td>
                <td><?=$row["titulo"];?></td>
                <td><?=$row["endereco"];?></td>
                <td><?=$row["url"];?></td>
                <input type="hidden" name="txtId" value="<?= $row["id"];?>"/>
                <input type="hidden" name="txtTitulo" value="<?= $row["titulo"];?>"/>
                <input type="hidden" name="txtEndereco" value="<?= $row["endereco"];?>"/>
                <input type="hidden" name="txtUrl" value="<?= $row["url"];?>"/>
                <td><button type="submit" value="alterar" name="botao">Alterar</button></td>
                <td><button type="submit" value="excluir" name="botao">Excluir</button></td>
            </tr>
        </form>
   
    <?php } ?>
</section>
    </body>
</html>