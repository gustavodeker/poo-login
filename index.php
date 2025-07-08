<?php
// index.php
session_start();
date_default_timezone_set('America/Sao_Paulo');

// Pega a URI sem parâmetros
$request = $_SERVER['REQUEST_URI'];
$request = parse_url($request, PHP_URL_PATH);

// Remove barra inicial e final
$route = trim($request, '/');

// Se estiver vazio, redireciona para login
if ($route == '') {
    $route = 'login';
}

// Roteamento simples
switch ($route) {
    case 'auth':
        include 'config/auth.php';
        break;
    case 'home':
        include 'web/home/home.php';
        break;
    case 'login':
        include 'web/login/login.php';
        break;
    case 'cadastro':
        include 'web/cadastro/cadastro.php';
        break;
    default:
        include 'web/404/404.php';
        break;
}
