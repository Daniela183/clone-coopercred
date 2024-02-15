<?php

include_once("../classes/manipuladados.php");

$manipula = new manipuladados();

$login = $_POST['txtNome'];
$senha = $_POST['txtSenha'];

$linhas = $manipula->validarLogin($login, $senha);

if ($linhas == 0) {
    echo '<script>alert("Nome ou senha do Admin não cadastrada ou incorreta")</script>';
    echo "<script>location = 'index.php';</script>";
} else {
    setcookie("nome_usuario", $login);
    setcookie("senha_usuario", $senha);
    header("location: principal.php");
}

?>