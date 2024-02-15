<?php
include_once("../classes/manipuladados.php");

?>

<html>

<head>
    <title>Formulário Produto</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/app.css'>
    <script src='../js/bootstrap.bundle.js'></script>
</head>

<body>
<br><br>
    <main class="container">
    <br><br><br>
        <h1>Formulário  de cadastro de produtos</h1>
        <form action="secoes/cadastrarimagem.php" method="post" enctype="multipart/form-data">

            <label>Imagem:</label>
            <input type="file" name="arquivo" class="form-control form-control-sm"> <br><br>
            <input type="submit" value="Cadastrar" class="btn btn-success mb-3">
            <input type="reset" value="Limpar"  class="btn btn-success mb-3">
        </form>


        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>URL</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>

            <?php

            $busca = new manipuladados();
            $busca->setTable("tb_imagem");
            $resultado = $busca->getAllDataTable();
            $produtos = $busca->getAllDataTable();
            foreach ($produtos as $dados) {
            ?>


                <form action="secoes/visualizarimagem.php" method="post" name="formulario">
                    <tr>
                        <td><?= $dados["id"]; ?></td>
                        <td><?= $dados["url"]; ?></td>
                        <input type="hidden" name="id" value="<?= $dados["id"]; ?>" />
                        <input type="hidden" name="url" value="<?= $dados["url"]; ?>" />
                        <td><button type="submit" name="botao" value="editar"  class="btn btn-success">Alterar</button></td>
                        <td><button type="submit" name="botao" value="excluir"  class="btn btn-danger">Excluir</button></td>
                    </tr>


                </form>



            <?php }  ?>
        </table>
    </main>
</body>

</html>