<?php

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id === false) {
    header("Location: index.php?sucesso=0");
    exit();
}

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

$sqlQuery = "UPDATE videos SET url = :url, title = :title WHERE id = :id;";

$statement = $pdo->prepare($sqlQuery);
$statement->bindValue(':url', $url);
$statement->bindValue(':title', $title);
$statement->bindValue(':id', $id, PDO::PARAM_INT);
$statement->execute();

if ($statement->execute() === false) {
    header('Location: /index.php?sucesso=0');
} else {
    header('Location: /index.php?sucesso=1');
}
