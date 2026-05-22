<?php
    include "conecta.php";

    $id = $_GET['id'];

    $query = mysqli_query($conexao, "SELECT cli_cod, cli_nome, cli_telefone FROM clientes WHERE cli_cod = '$id'");

    $saida = mysqli_fetch_array($query);
    $codigo = $saida[0];
    $nome = $saida[1];
    $telefone = $saida[2];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar campos</title>
</head>
<body>
    <form method="post" action="alterar1.php">
    <table>
        <tr>
            <td>Codigo</td>
            <td>Nome</td>
            <td>Telefone</td>
            <td>Enviar</td>
        </tr>
        <tr>
            <td><input type="text" name="codigo_v" value='<?php echo $codigo;?>' disabled></td>
            <input type="hidden" name='codigo' value='<?php echo $codigo; ?>'>
            <td><input type="text" name="nome" value='<?php echo $nome;?>'></td>
            <td><input type="text" name="telefone" value='<?php echo $telefone;?>' ></td>
            <td><input type="submit" value="gravar"></td>
        </tr>
    </table>
    </form>
    <br>
    <p><a href="index.php">Voltar para o menu</a></p>
</body>
</html>