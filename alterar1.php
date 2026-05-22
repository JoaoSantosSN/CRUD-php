<?php
    include "conecta.php";

    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];

    $query = mysqli_query($conexao, "UPDATE clientes SET cli_nome = \"$nome\", );
?>