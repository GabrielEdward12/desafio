<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="prod.css">
</head>

<body class="body">
    <header>
        <h1>Tech Mais Informática</h1>
    </header>
    <form class="form" action="prod.php" method="get">
        <label>Produto 1:</label>
        <input type="text" name="p1[]" required>

        <label>Preço 1:</label>
        <input type="number" name="pr1[]" required>
   
        <label>Produto 2:</label>
        <input type="text" name="p1[]" required>
       
        <label>Preço 2:</label>
        <input type="number" name="pr1[]" required>
     
        <label>Produto 3:</label>
        <input type="text" name="p1[]" required>
   
        <label>Preço 3:</label>
        <input type="number" name="pr1[]" required>

        <label>Produto 4:</label>
        <input type="text" name="p1[]" required>
  
        <label>Preço 4:</label>
        <input type="number" name="pr1[]" required>

        <input class="botao" type="submit" value="Enviar">

    </form>

    <footer class="foot">
        <p>Desenvolvido por: Gabriel Dantas Cerqueira</p>
    </footer>

</body>

</html>