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
    <link rel="stylesheet" href="../css/guiche/guiche.css">
    <link rel="stylesheet" href="../css/guiche/card-chamar-senha.css">

    <title>Contatos</title>

</head>

<body>

    <!-- senhas imprimidas: x // senhas restantes: y -->

    <div class="container-chamar-senha">

        <header>
            
            <div class="titulo">
                <h2>GUICHÊ 4</h2>
                <span>senhas: 13</span>
            </div>

            <img src="../img/logo.png" alt="logo">

            <button type="button" class="btn btn-danger">SAIR</button>

            <!-- *sair* da conta, canto direito-->
             
        </header>

        <div class="container">
            <div class="card-chamar-senha card">
                <!-- <img src="../img/logo.png" alt="Logo Plasfran"> -->
                <div class="card-senha">
                    <h2>SENHA</h2>
                    <h1 id="senha">0</h1>
                </div>
                <div class="btn-group" role="group">
                    <button id="anterior" type="button" class="btn btn-success btn-lg" onclick="numAnterior()">anterior</button>
                    <button id="chamar" type="button" class="btn btn-danger btn-lg" onclick="chamar()">chamar</button>
                    <button id="proximo" type="button" class="btn btn-success btn-lg" onclick="numProximo()">próximo</button>
                </div>
                <span id="ultima-chamada"></span>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="../scripts/guiche.js"></script>

</body>

</html>