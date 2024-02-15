<?php
include_once("../../classes/manipuladados.php");
$op = $_POST['botao'];

$id = $_POST['txtId'];
$titulo = $_POST["txtTitulo"];
$endereco = $_POST["txtEndereco"];


switch($op){
    case "alterar":
        
        echo
        '<h2>Alterar Parceiro</h2>
        <form method="POST" action="alterarParceiro.php" enctype="multipart/form-data">
        <p><label for="titulo">Informe a Titulo do Parceiro</label>
            
			<input type="text" name="txtTitulo" value="'.$titulo.'"/></p>
	
			<p><label>Informe o endereço do Parceiro</label></p>
            <input type="text" name="txtEndereco" value="'.$endereco.'"/></p>
            
            <input type="hidden" name="txtId" value="'.$id.'"/></p>

            <p><input type="file" name="arquivo"/></p>
            <p>
                <input type="submit" value="Enviar"/>
                <input type="reset" value="Limpar"/>
            </p>
        </from>';

        break;

    case "excluir":
        $remove = new manipuladados();
        $remove->setTable("tb_parceiro");
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

