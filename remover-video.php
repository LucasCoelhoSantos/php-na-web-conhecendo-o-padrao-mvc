<?php

$id = $_GET['id'];

$sqlQuery = "DELETE FROM videos WHERE id = ?;";

$statement = $pdo->prepare($sqlQuery);
$statement->bindValue(1, $id);
$statement->execute();

if ($statement->execute() === false) {
    header('Location: /index.php?sucesso=0');
} else {
    header('Location: /index.php?sucesso=1');
}
