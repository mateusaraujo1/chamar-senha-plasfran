<?php 

require '../services/connection.php';
require '../services/loginService.php';
require '../model/loginModel.php';

$login = new Login();
$connection = new Connection();

$login->__set('user', 'guiche_1');
$login->__set('password', '123');

$loginService = new LoginService($connection, $login);

$loginService->entrar();

?>