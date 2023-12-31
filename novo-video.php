<?php

$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);
if ($url === false) {
    header('Location: /index.php?sucesso=0');
    exit();
}
$titulo = filter_input(INPUT_POST, 'titulo');
if ($titulo === false) {
    header('Location: /index.php?sucesso=1');
    exit();
}

$sqlQuery = "INSERT INTO videos (url, title) VALUES (?, ?)";

$statement = $pdo->prepare($sqlQuery);
$statement->bindValue(1, $url);
$statement->bindValue(2, $titulo);

if ($statement->execute() === false) {
    header("Location: /index.php/sucesso=0");
} else {
    header("Location: /index.php/sucesso=1");
}
