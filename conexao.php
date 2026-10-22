<?php
$servidor = "localhost";
$banco = "cadastro_livros";
$usuario = "root";
$senha = "";

try{
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco;charset=utf8mb4", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch{
    die("Erro de conexão: ". $e->getMessage());
}
?>