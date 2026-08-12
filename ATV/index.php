<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
    <link rel="stylesheet" href="pross.css">
</head>
<body>
    <header>
        <h1>Atividade Avaliativa</h1>
    </header>
    <section>
        <form>
            <h1>Informe a sua nota:</h1>
            <br>
            <label for="Nome">Nome:</label>
            <br>
            <input type="text" name="nome" required placeholder="Digite seu nome">
            <br>
            <label for="nota1">Nota 1:</label>
            <br>
            <input type="text" name="nota1" required placeholder="Responde ai meu fi!">
            <br>
            <label for="nota1">Nota 2:</label>
            <br>
            <input type="text" name="nota2" required placeholder="Responde ai meu fi!">
            <br>
            <label for="nota1">Nota 3:</label>
            <br>
            <input type="text" name="nota3" required placeholder="Responde ai meu fi!">
            <br>
            <input class="botao" type="submit" value="Enviar">
        </form>

        <div class="resultado">
            <?php
            $nome = $_GET["nome"];
            $nota1 = $_GET["nota1"];
            $nota2 = $_GET["nota2"];
            $nota3 = $_GET["nota3"];
            $media = ($nota1 + $nota2 + $nota3) / 3;
            echo "Nome: $nome";
            echo "<br>";
            echo "Sua média é: $media";
            echo "<br>";
            if ($media >= 9) {
                echo "<div class=exe>Excelente: Parabéns! Seu desempenho foi excelente. Continue sendo um
        exemplo de dedicação!<div>";
                echo "<br>";
            } elseif ($media >= 7) {
                echo "<div class=apr>Aprovado: Muito bem! Você atingiu o objetivo. Continue evoluindo e buscando
        novos desafios.<div>";
                echo "<br>";
            } elseif ($media >= 5) {
                echo "<div class=rec>Recuperação: Você ainda pode melhorar seu desempenho. Revise os conteúdos
        estudados e mantenha o foco.<div>";
                echo "<br>";
            } else {
                echo "<div class=rep>Reprovado: Não desista! Todo aprendizado exige dedicação e persistência.
        Revise os conteúdos e tente novamente.<div>";
                echo "<br>";
            }
            ?>
        </div>
    </section>
    <footer class="foot">
        <h1> 2026 Atividade Avaliativa. Todos os direitos reservados.</h1>
    </footer>

</body>

</html>