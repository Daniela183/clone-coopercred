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
             <h3 class="card-title text-center">Cadastrar Produtos/Peças</h3>
             <div class="cont">
             <form method="post" enctype="multipart/form-data" action="secoes/cadastrarProdutos.php">
             <div class="form-floating mb-3">
			<p><label for="titulo">Informe Descrição do Produto</label></p>
			<p><input type="text" name="txtDescricao"/></p>
	
			<p><label>Informe o valor do Produto</label></p>
            <p>
            <input type="text" name="txtValor"/></p>
            </p>
            <p>
                <label>Selicione o tipo do produto:</label>
            </p>
            <p>
                <input type="radio" name="rbTipo" value="0" id="carreta"><label for="carreta">Carretas</label>
                <input type="radio" name="rbTipo" value="1" id="pecas"><label for="pecas">Peças</label>
            </p>

            <p>
                <input type="file" name="arquivo"/>
            </p>
            <p>
                <input type="submit" value="Enviar"/>
                <input type="reset" value="Limpar"/>
            </p>
</br>
		</form>
                               
      
        <section>
    <?php
    $busca = new manipuladados();
    $busca->setTable("tb_produto");
    $resultado = $busca->getAllDataTable();
    while($row = @mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
    ?>
 
        <form action="secoes/verificar.php" method="POST" name="formulario">
            
            
          <tr>
                <td><?=$row["id"];?></td>
                <td><?=$row["valor"];?></td>
                <td><?=$row["descricao"];?></td>
                <td><?=$row["url"];?></td>
                <input type="hidden" name="id" value="<?= $row["id"];?>"/>
                <input type="hidden" name="descricao" value="<?= $row["descricao"];?>"/>
                <input type="hidden" name="valor" value="<?= $row["valor"];?>"/>
                <input type="hidden" name="status" value="<?= $row["status"];?>"/>
                <input type="hidden" name="url" value="<?= $row["url"];?>"/>
                <td><button type="submit" value="alterar" name="botao">Alterar</button></td>
                <td><button type="submit" value="excluir" name="botao">Excluir</button></td>
             </tr></table>
           
        </form>
   
    <?php } ?>
</section>
    </body>
</html>