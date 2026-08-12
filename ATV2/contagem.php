<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cont.css">
</head>
<body>
    <div class="form">
    <h1>Número das Etiquetas:</h1>
    <?php  
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $quant=0;
    $quant2=0;
    if($n1<$n2){
    while($n1<= $n2){
        echo "<strong>Etiqueta n°<strong>: $n1 <br>";
        $n1++;
        $quant++;
    }
    }
    else if($n1>$n2){
        while($n1>= $n2){
        echo "<strong>Etiqueta n°<strong>: $n1 <br>";
        $n1--;
        $quant++;
    } 
    }
    echo "<br><strong>Quantidade de etiquetas:<strong> $quant <br>";
    ?>
    </div>
</body>
</html>