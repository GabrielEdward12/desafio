<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavel</title>
</head>
<body>
    <?php
    $nome = "Gabriel";
    $sobrenome = "Dantas";
    $aux = "Fernando";
    $nome = $aux;
    $aux2 = "Silva";
    $sobrenome = $aux2;
    echo "o nome da primeira variavel: <strong>$nome</strong>";
    echo "<br>";
    echo "o nome da segunda variavel: <strong>$sobrenome</strong>";
    echo "<br>";
    echo "Meu nome é $nome $sobrenome";
    ?>
</body>
</html>