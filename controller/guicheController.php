<?php 

require '../../services/connection.php';
require '../../services/guicheService.php';
require '../../model/guicheModel.php';

$guiche = new Guiche();
$connection = new Connection();


if (isset($_SESSION['id'])) {
    // coloca-se -2 para ter o mesmo id no BD
    // depois será usado um JOIN para relacionar as tabelas no BD
    $guiche->__set('id', $_SESSION['id']-2);
}

$guicheService = new GuicheService($connection, $guiche);

$guiche = $guicheService->getGuiche();

// tentar colocar em outro arquivo

if (isset($_POST['senhaAtual'])) 
{
    $guicheService->setSenhaAtual((int)$_POST['id'], (int)$_POST['senhaAtual']);
}

?>