<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cont.css">

</head>
<body>
    <div class="form">
    <h1>Numerações das Etiquetas:</h1>
    <p><strong>Aluno: Gabriel Dantas Cerqueira.</strong></p>
    <form action="contagem.php" method="get">
        <label for="n1"><strong>Informe o valor inicial:</strong></label>
        <br>
        <input type="text" name="n1" required>
        <br>
        <label for="n2"><strong>Informe o valor final:</strong></label>
        <br>
        <input type="text" name="n2" required>
        <br>
        <input class="envio" type="submit" value="Enviar">
    </form>
    </div>
</body>
</html>