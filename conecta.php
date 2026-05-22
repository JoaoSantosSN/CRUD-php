<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "aula";

$conexao = mysqli_connect( $servidor, $usuario, $senha, $banco)
 or die("Problema para conectar no banco, verifique os dados");
?>