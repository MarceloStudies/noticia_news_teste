<?php
include_once 'connDb.php';

// Verificar se o usuário não está logado
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redirecionar para a página de login ou exibir uma mensagem de erro
    header('Location: login.php');
    exit();
}
