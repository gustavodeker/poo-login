<?php
// Verifique se um parâmetro 'page' está presente na URL
$page = isset($_GET['page']) ? $_GET['page'] : 'login';

switch ($page) {
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
        include 'web/404/404.php'; // Página não encontrada
        break;
}
