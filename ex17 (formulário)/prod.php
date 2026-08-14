<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>
<body>
    <h1>Processamento</h1>
    <?php
    $nomes = $_GET["p1"];
    $preco = $_GET["pr1"];
    foreach ($nomes as $indice => $nome){
        echo $nome ."<br>";
        echo "Precos R$". number_format($preco[$indice]) ."<br>";
    }
    ?>
</body>
</html>