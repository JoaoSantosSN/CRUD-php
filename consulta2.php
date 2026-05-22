<?php
    include "conecta.php";

    $busca = $_POST["busca"];

    $query = mysqli_query($conexao, "SELECT cli_cod, cli_nome, cli_telefone 
    FROM clientes WHERE cli_nome LIKE \"%$busca%\" group by 1");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conultar</title>
    <style>
        body{text-align:center;}
    </style>
</head>
<body>
    <h1>RESULTADO DA CONSULTA</h1>

    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Telefone</th>
        </tr>
        <?php
            while($saida = mysqli_fetch_array($query)){
                $codigo = $saida[0];
                $nome = $saida[1];
                $telefone = $saida[2];

                echo "<tr>";
                echo "<td>" . $codigo . "</td>";
                echo "<td>" . $nome . "</td>";
                echo "<td>" . $telefone . "</td>";
                echo "<td><a href=alterar.php?id=" . $codigo . "
                >editar</a></td>";
                echo "<td><a href=deletar.php?id=" . $codigo . "
                >excluir</a></td>";
                echo "</tr>";
            }
            mysqli_close($conexao);
        ?>
    </table>
</body>
</html>