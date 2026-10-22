<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblíoteca</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de livros</h1>

        <form action="livro.php" method="POST">

        <label for="titulo">Titulo do Livro: </label>
        <input type="text" id="titulo" name="titulo" required>

        <br><br>

        <label for="autor">Autor: </label>
        <input type="text" id="autor" name="autor" required>

        <br><br>

        <label for="editora">Editora do Livro: </label>
        <input type="text" id="editora" name="editora" required>

        <br><br>

        <label for="anoPublicacao">Ano de Publicação do Livro: </label>
        <input type="text" id="anoPublicacao" name="anoPublicacao" required>

        <br><br>

        <button type="submit">Cadastrar</button>
        </form>
        <p>
            <a href="listar.php">Ver livros cadastrados</a>
        </p>
    </div>
</body>
</html>