<?php 

  session_start();

  if(!isset($_SESSION['autenticado']) ||
    !$_SESSION['autenticado'])
    header("Location: index.php?login=erro");

  // ($login->__get('type') != $_SESSION['type']

?>