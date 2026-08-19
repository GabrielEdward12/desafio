<?php
//configuração da página config
require_once 'config.php';
if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    //inserir os dados no banco de dados
    $SQL = "INSERT INTO `alunos` (Nome, Idade) VALUES ( '$nome', '$idade')";
    //executar a consulta sql
    if($conexao->query($SQL)) {
        echo "Cadastro realizado com sucesso";  
}else{
    echo "Cadastro não realizado:". $conexao->error;
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <h1>Cadastro de Usuário</h1>
    <form action="config.php" method="get">

        <label for="nome">Digite o seu nome:</label>
        <input type="text" name="nome" required placeholder="Digite o seu nome">
        <br><br>
        <label for="idade">Digite a sua idade:</label>
        <input type="text" name="idade" required placeholder="Digite a sua idade">
        <br><br>
        <input type="submit" name="cadastro" value="Enviar">

    </form>

</body>

</html>