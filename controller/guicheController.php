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

$OBJ = $guicheService->getGuiche();

$guiche = $guiche->instanciar($OBJ);
echo '<pre>';
print_r($guiche);
echo $guiche->id;
echo '</pre>';

if (isset($_POST['senhaAtual'])) 
{
    $guiche->__set('senha_atual', $_POST['senhaAtual']);
    $guicheService->setSenhaAtual($guiche);
}

?>