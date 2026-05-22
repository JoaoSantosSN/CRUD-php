<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="gravar.php">
    <table>
        <tr>
            <td>Nome</td>
            <td>Telefone</td>
            <td>Enviar</td>
        </tr>
        <tr>
            <td><input type="text" name="nome"></td>
            <td><input type="text" name="telefone"></td>
            <td><input type="submit" value="gravar"></td>
        </tr>
    </table>
    </form>
    <p><a href="consulta.php">Consultar clientes</a></p>
    <br>
    <p><a href="index.php">Voltar para o menu</a></p>
</body>
</html>