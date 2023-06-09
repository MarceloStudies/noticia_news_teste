<?php
include_once __DIR__ . '/config/connDB.php';
require_once __DIR__ . '/../model/User.php';

if (!isset($_REQUEST["action"])) die("Ação não informada");
$action = $_GET['action'];
$method = $_SERVER['REQUEST_METHOD'];

if ($action == 'login') {

    if ($method != 'POST') die("Ação inválida");

    $email = $_REQUEST['email'];

    $password = $_REQUEST['password']; // Criptografa a senha;

    // Instancia a classe user
    $user = new User($pdo, $email, $password);

    // Chama o método login para logar o usuário
    $result = $user->login();

    if ($result == $password) {
        
        $_SESSION['logado'] = true;
        echo true;
    } else {
        echo false;
    }
}

if ($action == 'signUp') {
    if ($method != 'POST') die("Ação inválida");

    $email = $_REQUEST['email'];

    $password = $_REQUEST['password']; // Criptografa a senha;

    // Instancia a classe user
    $user = new User($pdo, $email, $password);

    // Chama o método cadastraruser para cadastrar o novo usuário
    $result = $user->createUser();

    echo $result;
}


// faça o if de deslogar 
if ($action == 'logout') {
    if ($method != 'POST') die("Ação inválida");

    // Instancia a classe user
    $user = new User($pdo, '', '');

    $_SESSION['logado'] = false;

    // Chama o método cadastraruser para cadastrar o novo usuário

    echo $result;
}
