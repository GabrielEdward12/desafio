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
    $nomemaior = $nomes[0];
    $nomemenor = $nomes[0];
    foreach ($nomes as $indice => $nome) {
        echo "Produto: $nome<br>";
        echo "Preço: R$" . number_format($preco[$indice], 2, ",", ".") . "<br><br>";
        $total += $preco[$indice];

        if ($preco[$indice] > $maior) {
            $maior = $preco[$indice];
            $nomemaior = $nome;
        }
        if ($preco[$indice] < $menor) {
            $menor = $preco[$indice];
            $nomemenor = $nome;
        }
        $media = $total / count($nomes);
    }
    //Quantidade de produtos
    echo "O total é igual a:R$" . number_format($total, 2, ",", ".") . "<br><br>";
    //quantidade
    echo "A quantidade de produtos é: " . count($nomes) . "<br><br>";
    //maior preço
    echo "O produto com maior preço é :$nomemaior  <br>";
    echo "O maior preço do produto é: R$" . number_format($maior, 2, ",", ".") . "<br><br>";
    //menor preço
    echo "O produto com maior preço é :$nomemenor  <br><br>";
    echo "O menor preço é igual a : R$" . number_format($menor, 2, ",", ".") . "<br><br>";
    //Média
    echo " A média é igual a: R$" . number_format($media, 2, ",", ".") . "<br><br>";
    if ($total > 500) {
        echo "Parabens, a sua compra ultrapassou o valor de R$500.<br><br>";
    } else if ($total < 500) {

        echo "Sua compra não ultrapassou R$500. <br><br>";
    }


    ?>
</body>

</html>