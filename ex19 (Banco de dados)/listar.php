<?php
//importando conexão php
require_once 'config.php';
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
//realizando a consulta no banco de dados
$Sql = "Select * from alunos";
//executando a consulta
$resultado = $conexao->query($Sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Alunos</title>
    <link rel="stylesheet" href="listar.css">
</head>

<body>
    <h1>Listar os alunos</h1>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Ações</th>
        </tr>
        <?php
        while
        ($linha = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $linha['Id'] . "</td>";
            echo "<td>" . $linha['Nome'] . "</td>";
            echo "<td>" . $linha['Idade'] . "</td>";
            echo "<td> <a href='editar.php?id=".$linha['Id']."'>Editar</a></td>";
            echo "</tr>";

        }

        ?>
    </table>

</body>

</html>