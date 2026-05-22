<?php
    include "conecta.php";

    $codigo = $_GET['id'];

    $query = mysqli_query($conexao, "DELETE FROM clientes WHERE cli_cod = '$codigo'");
?>
<script>
    alert("Cliente deletado com sucesso!");
    window.location.href="cliente.php"
</script>