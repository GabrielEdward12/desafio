<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = $_GET["nome"];
    $n1 = $_GET["n1"];
    $idade = $_GET["idade"];
    if($idade >= 18 && $n1 >=7){
        echo "Seu nome é $nome. ";
        echo "<br>";
        echo "Você está aprovado.";
    }else {
        echo "Seu nome é $nome. ";
        echo "<br>";
        echo "Reprovado.";
    }
    ?>
    
</body>
</html>