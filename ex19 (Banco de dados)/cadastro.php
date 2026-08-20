<?php
//configuração da pagina config
require_once 'config.php';
// VERIFICAR SE O FORMULÁRIO FOI ENVIADO
if($_SERVER["REQUEST_METHOD"] =="POST"){

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// INSERIR OS DADOS NO BANCO DE DADOS
$Sql ="INSERT INTO alunos (Nome, Idade) VALUES ('$nome', '$idade')";
//EXECUTAR A CONSULTA SQL

if($conexao->query($Sql)){

echo "Cadastro realizado com sucesso!"; 

}else{
    echo "Erro ao cadastrar: " . $conexao->error;
    
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



<form action="" method ="post">
<label>Nome</label>
<input type="text" name="nome" required placeholder="digite o nome">
<br><br>
<label>Idade</label>
<input type="number" name="idade" required placeholder="digite a idade">
<br><br>
<input type="submit" name="cadastrar" value="Cadastrar">
</form>



</body>
</html>