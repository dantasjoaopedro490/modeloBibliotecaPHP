
<?php
require_once "conexao.php";

function voltar(string $status): never {
    header("Location: cadastro.php?status=" . urlencode($status));
    exit;
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: cadastro.php");
    exit;
}

$titulo = trim($_POST["titulo"] ?? "");
$autor = trim($_POST["autor"] ?? "");
$editora = trim($_POST["editora"] ?? "");
$ano = trim($_POST["ano_publicacao"] ?? "");

if (
    $titulo === "" ||
    $autor === "" ||
    $editora === "" ||
    $ano === ""
) {
    voltar("invalido");
}

if (
    mb_strlen($titulo) > 150 ||
    mb_strlen($autor) > 100 ||
    mb_strlen($editora) > 100 ||
    !preg_match('/^\d{4}$/', $ano) ||
    (int)$ano < 1901 ||
    (int)$ano > 2155
) {
    voltar("invalido");
}

try {
    $sql = "INSERT INTO livros
            (titulo, autor, editora, ano_publicacao)
            VALUES (?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $titulo,
        $autor,
        $editora,
        (int)$ano
    ]);

    voltar("sucesso");

} catch (PDOException $e) {
    error_log($e->getMessage());
    voltar("erro");
}
?>
