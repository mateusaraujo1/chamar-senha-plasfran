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

if (isset($login->id)) {
    echo 'tem algo';

    // dar um session_start aqui... ou só dentro da página principal? qual o escope dela?

    // criar o redirecionamento (switch por 'id') para respectiva página

} else {
    header('location: ../public/index.php?login=erro');
}

?>