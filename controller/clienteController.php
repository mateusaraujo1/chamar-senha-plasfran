<?php 

require '../../services/connection.php';
require '../../services/clienteService.php';
require '../../model/fichaModel.php';

$ficha = new Ficha();
$connection = new Connection();

$clienteService = new ClienteService($connection, $ficha);

if (isset($_POST['guicheId'])) 
{
    $guiche = $_POST['guicheId'];
    $clienteService->imprimirSenha($guiche);
}

?>