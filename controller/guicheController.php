<?php 

require '../../services/connection.php';
require '../../services/guicheService.php';
require '../../model/guicheModel.php';

$guiche = new Guiche();
$connection = new Connection();

$guicheService = new GuicheService($connection, $guiche);


?>