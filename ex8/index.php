<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=php, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Contador</h1>
    <?php
    $cont = 0;
    while ($cont <= 4) {
        $cont++;
        echo "Contador: $cont <br>";
        echo "<br>";

    }
    $cont2 = 11;
    while ($cont2 >= 2) {
        $cont2--;
        echo "Contador Regressivo: $cont2 <br>";

    }
    ?>
</body>

</html>