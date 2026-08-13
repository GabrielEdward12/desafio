<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form2">
        <?php

        $n1 = $_GET['n1'];
        $quant = 0;

        for ($i = 1; $i <= $n1; $i++) {
            if ($i % 2 == 0) {
                echo "<strong>Computador n° $i : Manutenção padrão.<strong><br>";
            } else if ($i % 2 != 0) {
                echo "<strong>Computador n° $i : Manutenção prioritária.<strong><br>";
            }
            $quant++;

        }
        echo "<br>Quantidade de computadores: $quant."

        ?>
    </div>
    <div class="botao">
        <a href="index.php">Voltar</a>
    </div>
</body>

</html>