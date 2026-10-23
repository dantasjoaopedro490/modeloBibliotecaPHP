
<?php
require_once "conexao.php";

try {
    $sql = "SELECT id, titulo, autor, editora, ano_publicacao
            FROM livros
            ORDER BY id ASC";

    $stmt = $pdo->query($sql);
    $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    error_log($e->getMessage());
    exit("Erro ao consultar os livros.");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Livros Cadastrados</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="container">
    <h1>Livros Cadastrados</h1>

    <?php if (empty($livros)): ?>

        <p>Não há livros cadastrados.</p>

    <?php else: ?>

        <div class="tabela">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Editora</th>
                        <th>Ano</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($livros as $livro): ?>
                        <tr>
                            <td><?= (int)$livro["id"] ?></td>

                            <td><?= htmlspecialchars(
                                $livro["titulo"],
                                ENT_QUOTES,
                                "UTF-8"
                            ) ?></td>

                            <td><?= htmlspecialchars(
                                $livro["autor"],
                                ENT_QUOTES,
                                "UTF-8"
                            ) ?></td>

                            <td><?= htmlspecialchars(
                                $livro["editora"],
                                ENT_QUOTES,
                                "UTF-8"
                            ) ?></td>

                            <td><?= htmlspecialchars(
                                (string)$livro["ano_publicacao"],
                                ENT_QUOTES,
                                "UTF-8"
                            ) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    <?php endif; ?>

    <a href="index.php">Voltar ao início</a>
    <a href="cadastro.php">Cadastrar outro livro</a>
</div>

</body>
</html>
