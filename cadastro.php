<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Livro</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="container">
    <h1>Cadastrar Livro</h1>

    <?php
    $status = $_GET["status"] ?? "";

    if ($status === "sucesso") {
        echo "<p>Livro cadastrado com sucesso!</p>";
    } elseif ($status === "erro") {
        echo "<p>Erro ao cadastrar o livro.</p>";
    } elseif ($status === "invalido") {
        echo "<p>Preencha os campos corretamente.</p>";
    }
    ?>

    <form action="salvar.php" method="POST">

        <label for="titulo">Título do livro:</label>
        <input type="text" id="titulo" name="titulo"
               maxlength="150" required>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor"
               maxlength="100" required>

        <label for="editora">Editora:</label>
        <input type="text" id="editora" name="editora"
               maxlength="100" required>

        <label for="ano_publicacao">Ano de publicação:</label>
        <input type="number" id="ano_publicacao"
               name="ano_publicacao"
               min="1901" max="2155" required>

        <button type="submit">Cadastrar Livro</button>
    </form>

    <a href="index.php">Voltar ao início</a>
    <a href="listar.php">Listar Livros</a>
</div>

</body>
</html>