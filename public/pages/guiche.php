<?php


require_once "../../controller/validadorController.php";
require "../../controller/guicheController.php";

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
    <link rel="stylesheet" href="../css/guiche/guiche.css">
    <link rel="stylesheet" href="../css/guiche/card-chamar-senha.css">

    <title>Contatos</title>

    <script>

        function atualizar(senhaAtual) {
            var dados = new URLSearchParams();
            dados.append('senhaAtual', senhaAtual);
            dados.append('id', <?= $guiche->id ?>);

            fetch('guicheController.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: dados.toString()
                })
                .then(response => response.text())
                .then(data => console.log(data));
        }

        function chamar() {

            if (atual == 0) {
                return 0;
            } else {
                var chamada = document.getElementById('ultima-chamada');

                atualizar(atual);

                const data = new Date(); // Cria um novo objeto Date com a data e hora atuais
                const horas = data.getHours(); // Obtém a hora atual
                const minutos = data.getMinutes(); // Obtém os minutos atuais

                // Formata a hora e os minutos para garantir que sejam sempre de dois dígitos
                const horasFormatadas = (horas < 10 ? '0' : '') + horas;
                const minutosFormatados = (minutos < 10 ? '0' : '') + minutos;

                chamada.innerHTML = 'Última senha chamada: ' + atual + ' às ' + horasFormatadas+':'+minutosFormatados;
            }
        }
    </script>

</head>

<body>

    <!-- senhas imprimidas: x // senhas restantes: y -->

    <div class="container-chamar-senha">

        <header>

            <div class="titulo">
                <h2>GUICHÊ <?= $guiche->id ?></h2>
                <span>senhas: <?= $guiche->total_senhas ?></span>
            </div>

            <img src="../img/logo.png" alt="logo" style="margin-left: -90px;">


            <a id="sair" href="../../controller/logoffController.php">
                <button type="button" class="btn btn-danger m-0 pt-2 pb-2 pl-4 pr-4">SAIR</button>
            </a>

        </header>

        <div class="container">
            <div class="card-chamar-senha card">
                <!-- <img src="../img/logo.png" alt="Logo Plasfran"> -->
                <div class="card-senha">
                    <h2>SENHA</h2>
                    <h1 id="senha"><?= $guiche->senha_atual ?></h1>
                </div>
                <div class="btn-group" role="group">
                    <button id="anterior" type="button" class="btn btn-success btn-lg" onclick="numAnterior()">anterior</button>
                    <button id="chamar" type="button" class="btn btn-danger btn-lg" onclick="chamar()">chamar</button>
                    <button id="proximo" type="button" class="btn btn-success btn-lg" onclick="numProximo()">próximo</button>
                </div>
                <span id="ultima-chamada">Última senha chamada: <?= $guiche->senha_atual ?></span>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="../scripts/guiche.js"></script>

</body>

</html>