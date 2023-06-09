<?php

//inicie a sessão
session_start();


$host = 'db';
$dbname = 'noticia_news';
$username = 'root';
$password = 'root';

try {
    // Conexão com o banco de dados utilizando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
    echo 'Erro ao conectar com o banco de dados: ' . $e->getMessage();
}
