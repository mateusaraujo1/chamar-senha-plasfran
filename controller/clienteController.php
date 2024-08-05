<?php 

require '../../services/connection.php';
require '../../services/clienteService.php';
require '../../model/fichaModel.php';

$ficha = new Ficha();
$connection = new Connection();

$ficha->setAll(3, 4);

$clienteService = new ClienteService($connection, $ficha);

print_r($ficha);

?>