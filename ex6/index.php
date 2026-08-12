<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-and</title>
</head>
<body>
    <h1>If-and</h1>
    <?php
    $idade= 20;
    $itemCarteira = true;
    if($idade >= 20 && $itemCarteira){
    echo "Pode dirigir";
    }else {
        echo "Não pode dirigir";
    }
    
    
    ?>
</body>
</html>