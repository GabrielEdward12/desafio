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
    $media = 0;
    $maior = $preco[0];
    $menor = $preco[0];
    $total = 0;
    foreach ($nomes as $indice => $nome) {
        echo $nome . "<br>";
        echo "Preço: R$" . number_format($preco[$indice], 2, ",", ".") . "<br>";
        $total += $preco[$indice];
        if ($preco[$indice] > $maior) {
            $maior = $preco[$indice];

        }else if ($preco[$indice] < $menor) {
            $menor = $preco[$indice];
        }

        $media = $total/count($nomes);
    }
    //Quantidade de produtos
    echo "O total é igual a:R$" . number_format($total, 2, ",", ".") . "<br>";
    //quantidade
    echo "A quantidade de produtos é: " . count($nomes) . "<br>";
    //maior preço
    echo "O maior preço do produto é: R$" . number_format($maior, 2, ",", ".") . "<br>";
    //Média
    echo " A média é igual a: R$" .number_format($media, 2, ",", ".")."<br>";
    //menor preço
    echo "O menor preço é igual a : R$".number_format($menor, 2, ",", ".");

    /*
    echo "Exibir as informações <br>";
    echo "$nomes[0] <br>";
    echo "$preco[0] <br>";*/

    ?>
</body>

</html>