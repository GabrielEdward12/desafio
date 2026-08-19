<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão com o banco de dados</title>
</head>
<body>
    <?php  
    // conexão com o banco de dados 
    // credenciais de acesso ao banco de dados
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "aula_banco";
    //criando a conexão com o banco de dados
    $conexao = mysqli_connect($servidor,$usuario, $senha, $banco);
    //testando a coneexão com o banco de dados
    if($conexao->connect_error){
        echo "Erro na conexão". $conexao->connect_error;
    }else{
        echo "Conexão realizada com sucesso!";
    }
    
    ?>
</body>
</html>