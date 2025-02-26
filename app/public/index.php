<?php

session_start();

require_once __DIR__ . '/../app/App.php';

$urlResponse = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = $_POST["url"];
    $urlResponse = fetchUrlContent($url);
}

require_once __DIR__ . '/../views/index.php';
