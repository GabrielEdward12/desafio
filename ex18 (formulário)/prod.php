<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
    <link rel="stylesheet" href="prod.css">
</head>

<body class="body">
    <header>
        <h1>Tech Mais Informática</h1>
    </header>
    <div class="form">
        <h1>Produtos:</h1>
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
            echo "<div class=prod>";
            echo "Produto: $nome ---> Preço: R$" . number_format($preco[$indice], 2, ",", ".")."<br>";
            echo "</div>";
            $total += $preco[$indice];

            if ($preco[$indice] > $maior) {
                $maior = $preco[$indice];
                $nomemaior = $nome;
            }
            $media = $total / count($nomes);
        }
        //Quantidade de produtos
        
        echo "O total é igual a:R$ <div class=num>" . number_format($total, 2, ",", ".") . "</div>";
        //quantidade
        echo "A quantidade de produtos é:<div class=num> " . count($nomes) . "</div>";
        //maior preço
        echo "O produto com maior preço é :<div class=num>$nomemaior R$" . number_format($maior, 2, ",", ".") . "</div>";
        //menor preço
        //Média
        echo " A média é igual a: <div class=num>R$" . number_format($media, 2, ",", ".") . "</div><br>";
        if ($total > 500) {
            echo "<div class=num>Parabens, a sua compra ultrapassou o valor de R$500.</div><br>";
        } else if ($total < 500) {

            echo "<div class=num2>Sua compra não ultrapassou R$500.</div> <br><br>";
        }
        ?>
        <a class="botao" href="index.php">Voltar</a>
    </div>
    <footer class="foot">
        <p><strong>Desenvolvido por: Gabriel Dantas Cerqueira</strong></p>
    </footer>
</body>

</html>