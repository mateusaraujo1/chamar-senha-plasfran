<?php 

require '../../services/connection.php';
require '../../services/clienteService.php';
require '../../model/fichaModel.php';

$ficha = new Ficha();
$connection = new Connection();

$clienteService = new ClienteService($connection, $ficha);

$guiche = $clienteService->senhaAtual(1);



print_r($guiche);

?>