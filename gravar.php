<?php
include "conecta.php";

$nome = $_POST['Nome'];
$telefone = $_POST['Telefone'];

$query = mysqli_query(
    $conexao,
    "INSERT INTO clientes (cli_nome,cli_telefone)VALUES ('$nome', '$telefone')");

    mysqli_close($conexao);
?>
<script>
    alert("Cliente inserido com sucesso")
    window.location.href = "index.php"
</script>