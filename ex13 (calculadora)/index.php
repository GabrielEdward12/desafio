<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
    <link rel="stylesheet" href="calc.css">
</head>

<body>
    
    <div class="form">
        <h1>Calculadora:</h1>
        <form action="calc.php" method="get">

            <label for="n1">Digite o valor de A:</label>
            <br><br>
            <input type="text" name="n1" required>
            <br>
            <label for="n2">Digite o valor de B:</label>
            <br><br>
            <input type="text" name="n2" required>
            <br>
            <label for="op">Digite a operação matemática desejada ( + , - , * , / ):</label>
            <br><br>
            <input type="text" name="op" required>
            <br>
            <input class="envio" type="submit" value="Enviar">

        </form>
    </div>
</body>

</html>