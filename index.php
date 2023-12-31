<?php

require_once 'autoloader.php';

if (array_key_exists("PATH_INFO", $_SERVER) || $_SERVER["PATH_INFO"] === "/") {
    require_once "listagem-video.php";
} else if ($_SERVER["PATH_INFO"] === "/novo-video") {
    if ($_SERVER["REQUEST_METHOD"] === "GET") {
        require_once "formulario.php";
    } elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
        require_once "novo-video.php";
    }
} else if ($_SERVER["PATH_INFO"] === "/editar-video") {
    if ($_SERVER["REQUEST_METHOD"] === "GET") {
        require_once "formulario.php";
    } elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
        require_once "editar-video.php";
    }
}
