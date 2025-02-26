<?php

require_once "../../controller/validadorController.php";

require "../../controller/clienteController.php";

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Clínica Plasfran</title>

  <link rel="stylesheet" href="../css/cliente/cliente.css" />
  <link rel="stylesheet" href="../css/cliente/header.css" />

  <script>

    let counters = [
    <?= $clienteService->senhaAtual(1) ?>,
    <?= $clienteService->senhaAtual(2) ?>,
    <?= $clienteService->senhaAtual(3) ?>,
    <?= $clienteService->senhaAtual(4) ?>,
    <?= $clienteService->senhaAtual(5) ?>];


    function atualizar(guiche) {
      var valor = guiche;

      fetch('clienteController.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'guicheId=' + encodeURIComponent(valor)
      })
      .then(response => response.text())
      .then(data => console.log(data));
    }

    

  </script>

</head>

<body>

  <header>

    <img id="logo" src="../img/logo.png" alt="logo-plasfran" />

    <a id="sair" href="../../controller/logoffController.php">

      <button type="button" class="btn btn-danger">SAIR</button>

    </a>

  </header>


  <div id="main-container">

    <div class="guiche" onclick="showDetails(1)">
      Guichê 1: CAIXA PREFERENCIAL
    </div>

    <div class="guiche" onclick="showDetails(2)">
      Guichê 2: ATUALIZAÇÃO CADASTRAL
    </div>

    <div class="guiche" onclick="showDetails(3)">
      Guichê 3: CAIXA
    </div>

    <div class="guiche" onclick="showDetails(4)">
      Guichê 4: ATENDIMENTO LABORATORIAL
    </div>

    <div class="guiche" onclick="showDetails(5)">
      Guichê 5: ATENDIMENTO AO CLIENTE
    </div>

  </div>

  <div id="details-container" style="display: none">

    <button onclick="goBack()">Voltar</button>
    <div id="services"></div>
    <button onclick="printTicket(), goBack()">Imprimir Senha</button>

  </div>

  <script src="../scripts/cliente.js">

  </script>

</body>

</html>