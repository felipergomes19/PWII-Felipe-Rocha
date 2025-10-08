<?php

require "Databaseconnect.php";

$nome = $_POST["nome"] ?? '';
$idade = $_POST["idade"] ?? '';
$CPF = $_POST["CPF"] ?? '';

try {
    $stmt = $pdo->prepare("INSERT INTO dados (nome, idade, CPF) VALUES (:nome, :idade, :CPF)");
    $stmt->execute([
        ':nome' => $nome,
        ':idade' => $idade,
        ':CPF' => $CPF
    ]);

    echo "Dados inseridos com sucesso <br> <a href='index.php'>Voltar</a>";

} catch (PDOException $e) {
    echo "Erro ao inserir: " . $e->getMessage();
}
?>
z