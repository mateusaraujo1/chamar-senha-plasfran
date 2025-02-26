<?php

require_once "../../controller/validadorController.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap-5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/index/index.css">
    <link rel="stylesheet" href="../css/monitor/monitor.css">
    <link rel="stylesheet" href="../css/monitor/card-esquerda.css">
    <link rel="stylesheet" href="../css/monitor/card-direita.css">

    <title>Contatos</title>

</head>

<body>

    <div class="container-monitor">

        <header>
            <a id="sair" href="../../controller/logoffController.php">
                <button type="button" class="btn btn-danger m-0 pt-2 pb-2 pl-4 pr-4">SAIR</button>
            </a>
        </header>
        <!-- criar botão pra ficar com a tela cheia... ações do botão: ir pro final da página, ocultar barra vertical,
         mostrar pop-up discreto "aperte f11 para sair da tela cheia" -->

        <main>

            <div class="card-esquerda">

                <div class="card-esquerda-guiche">
                    <h2>GUICHÊ</h2>
                    <h1>03</h1>
                </div>

                <div class="card-esquerda-senha">
                    <h2>SENHA</h2>
                    <h1>12</h1>
                </div>

            </div>

            <div class="card-direita">
                <div class="card-direita-chamadas">

                    <h2>Senhas sendo atendidas</h2>

                    <!-- space-around, ou space-between -->

                    <div class="fichas-chamadas">
                        <p>GUICHÊ: 01, SENHA: 03</p>
                        <p>às 08:56</p>
                    </div>

                    <div class="fichas-chamadas">
                        <p>GUICHÊ: 02, SENHA: 03</p>
                        <p>às 08:56</p>
                    </div>

                    <div class="fichas-chamadas">
                        <p>GUICHÊ: 03, SENHA: 03</p>
                        <p>às 08:56</p>
                    </div>

                    <div class="fichas-chamadas">
                        <p>GUICHÊ: 04, SENHA: 03</p>
                        <p>às 08:56</p>
                    </div>

                    <div class="fichas-chamadas">
                        <p>GUICHÊ: 05, SENHA: 03</p>
                        <p>às 08:56</p>
                    </div>

                    <div class="fichas-chamadas">
                        <p>GUICHÊ: 06, SENHA: 03</p>
                        <p>às 08:56</p>
                    </div>

                </div>

            </div>

        </main>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>