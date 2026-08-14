<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nom = $_GET["nom"];
    $dia = $_GET["dia"];
    echo "Seu nome é: $nom <br>";
    switch ($dia) {
        case "1":
            echo "Segunda-feira.";
            break;
        case "2":
            echo "Terça-feira.";
            break;
        case "3":
            echo "Quarta-feira.";
            break;
        case "4":
            echo "Quinta-feira.";
            break;
        case "5":
            echo "Sexta-feira";
            break;
        case "6":
            echo "Sábado.";
            break;
        case "7":
            echo "Domingo.";
            break;
        default:
            echo "Opção Inválida.";
    }
    ?>


</body>

</html>