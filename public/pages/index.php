<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap-5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/index/index.css">
    <link rel="stylesheet" href="../css/index/card-login.css">

    <title>Clínica Plasfran</title>

</head>

<body>

    <div class="container">
        <div class="card-login card">

            <img src="../img/logo.png" alt="Logo Plasfran">

            <form action="../../controller/loginController.php" method="post">

                <div class="form-group">
                    <label class="sr-only" for="inlineFormInputGroup">Usuário</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img src="../img/contato.png" alt=""></div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Usuário" name="user" required>
                    </div>
                </div>



                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img src="../img/cadeado.png" alt=""></div>
                        </div>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="password" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Entrar</button>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>

                            <div class="text-danger d-flex justify-content-center">
                                Usuário ou senha inválidos
                            </div>

                <?php } ?>

            </form>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

</body>

</html>