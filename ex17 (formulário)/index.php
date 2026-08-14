<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <h1>Cadastro de produtos:</h1>
    <form action="prod.php" method="get">
        <label >Produto 1:</label>
        <br>
        <input type="text" name="p1[]" required>
        <br>
        <label >Preço 1:</label>
        <br>
        <input type="number" name="pr1[]" required>
        <br>
        <label >Produto 2:</label>
        <br>
        <input type="text" name="p1[]" required>
        <br>
        <label >Preço 2:</label>
        <br>
        <input type="number" name="pr1[]" required>
        <br>
        <input type="submit" value="Enviar">

    </form>

</body>

</html>