<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="calc.css">
</head>

<body class="body2">
    <div class="fade">
        <div class="form">
            <?php
            $op = $_GET["op"];
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];
            switch ($op) {
                case "+":
                    echo "A soma dos valores é: " . $n1 + $n2;
                    break;
                case "-":
                    echo "A subtração dos valores é: " . $n1 - $n2;
                    break;
                case "*":
                    echo "A multiplicação dos valores é: " . $n1 * $n2;
                    break;
                case "/":
                    if ($n2 > 0) {
                        echo "A divisão dos valores é: " . $n1 / $n2;
                    } else if ($n2 <= 0) {
                        echo "Opção inválida.";
                    }
                    break;
                default:
                    echo "Opção Inválida.";
            }
            ?>
            <a class="botao" href="index.php">Voltar</a>

        </div>
    </div>
</body>

</html>