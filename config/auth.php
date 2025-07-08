<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');

$servidor = "191.252.38.111";
$usuario = "gustavo";
$senha = "Sistema@123";
$banco = "poo";

try {
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco;charset=utf8", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conectado";
} catch (PDOException $erro) {
    echo "Falha ao conectar." . $erro;
}