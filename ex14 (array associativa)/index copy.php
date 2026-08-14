<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <?php
    $pessoa =
        [
            "Nome" => "João",
            "Idade" => 20,
            "Cidade" => "Imperatriz"
        ];
    foreach ($pessoa as $chave => $valor) {
        echo $chave . ":" . $valor . "<br>";

    }

    ?>
</body>

</html>