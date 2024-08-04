<?php

require '../services/connection.php';
require '../services/loginService.php';
require '../model/loginModel.php';

$login = new Login();
$connection = new Connection();

$login->__set('user', $_POST['user']);
$login->__set('password', $_POST['password']);

$loginService = new LoginService($connection, $login);

$login = $loginService->entrar();


// verifica se o login efetuado retornou resultado válido do banco de dados
if (isset($login->id)) {
    session_start();

    $_SESSION['autenticado'] = 1;
    $_SESSION['id'] = $login->id;
    $_SESSION['type'] = $login->type;

    switch ($login->type) {
        case 2:
            header('location: ../public/pages/cliente.php');
            break;

        case 3:
            header('location: ../public/pages/guiche.php');
            break;

        case 4:
            header('location: ../public/pages/monitor.php');
            break;

        default:
            header('location: ../public/index.php');
            break;
    }
} else {
    header('location: ../public/index.php?login=erro');
}

?>