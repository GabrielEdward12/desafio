<?php
//configuração da pagina config
require_once 'config.php';
$id = (int)$_GET['id'];
if ($id <= 0) {
    echo "Id inválido.";
    exit;

}
    echo $id;
//buscar os alunos no banco a partir do meu id
$stmt = $conexao->prepare("SELECT * FROM alunos WHERE Id= $id");
//executar a consulta SQL
$stmt->execute();
//Obtendo o resultado da consulta   
$resultado = $stmt->get_result();
//colocando o resultado em um array
$aluno = $resultado->fetch_assoc();

// VERIFICAR SE O FORMULÁRIO FOI ENVIADO
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $id = $_POST["Id"];

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    // INSERIR OS DADOS NO BANCO DE DADOS
    $Sql = "UPDATE alunos SET Nome ='$nome', Idade= '$idade' WHERE Id = $id ";
    //EXECUTAR A CONSULTA SQL

    if ($conexao->query($Sql)) {
   //     $aluno = ['nome'] = $nome;
   //     $idade = ['idade'] = $idade;
        echo "Atualizado com sucesso!";

    } else {
        echo "Erro ao atualizar: " . $conexao->error;

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
    <h1>Editar Cadastro</h1>



    <form action="" method="post">
        <label>Nome</label>
        <input type="text" name="nome" required placeholder="digite o nome" value="<?php echo $aluno['Nome'];?>">
        <input type="text" name="Id" required placeholder="digite o nome" value="<?php echo $aluno['Id'];?>">
        <br><br>
        <label>Idade</label>
        <input type="number" name="idade" required placeholder="digite a idade"  value="<?php echo $aluno['Idade'];?>">
        <br><br>
        <input type="submit" name="cadastrar" value="Editar">
    </form>



</body>

</html>