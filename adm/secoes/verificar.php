<?php
include_once("../../classes/manipuladados.php");
$op = $_POST['botao'];

$id=$_POST['id'];
$descricao=$_POST['descricao'];
$valor=$_POST['valor'];
$status=$_POST['status'];
$url=$_POST['url'];

switch($op){
    case "alterar":
        
        echo
        '
        <h2>Alterar Produto e Peça</h2>
        <form method="POST" action="alterarProduto.php" enctype="multipart/form-data">
        <p><label for="titulo">Informe Descrição do Produto</label>
            <input type="hidden" name="txtid" id="" value="' . $id . '"><br><br>
			<input type="text" name="txtDescricao" value="'.$descricao.'"/></p>
	
			<p><label>Informe o valor do Produto</label></p>
            <p><input type="text" name="txtValor"/></p>
            <p><label>Selicione o tipo do produto:</label></p>
            <p>
                <input type="radio" name="rbTipo" value="0" id="carreta"><label for="carreta">Carretas</label>
                <input type="radio" name="rbTipo" value="1" id="pecas"><label for="pecas">Peças</label>
            </p>

            <p><input type="file" name="arquivo"/></p>
            <p>
                <input type="submit" value="Enviar"/>
                <input type="reset" value="Limpar"/>
            </p>
        </from>';

        break;

    case "excluir":
        $remove = new manipuladados();
        $remove->setTable("tb_produto");
        $remove->setFieldId("id");
        $remove->setValueId($id);
        $remove->delete();
        echo'<script>alert("O arquivo foi removido com sucesso);</script>';
        echo "<script>location = '../principal.php'; </script>";
        break;

        default:
        exit("Tente outro site!");
        break;
}
