<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Registro</title>
</head>

<body class="bg-light">
    <main>
        <!--Regitro-->
        <section>
            <div class="container mt-5">
                <div class="d-flex justify-content-center">
                    <a href="/livre/"><img class="mt-5 mb-3" src="https://github.com/patrikrufino/livre/blob/main/Public/Img/livre_logo.png?raw=true" alt="Logo Livre" style="max-width: 170px;"></a>
                </div>
                <div class="mt-5 d-flex justify-content-center">
                    <h4>Registre-se</h4>
                </div>
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <div class="login-form bg-white shadow mt-4 p-4">
                            <form method="POST" class="row g-3">
                                <p><strong>Tem livros e quer trocar por novos?</strong> Registre-se e aproveite!</p>
                                <div class="col-12">
                                    <label>Nome</label>
                                    <input type="text" name="username" class="form-control" placeholder="Qual seu nome completo?">
                                </div>
                                <div class="col-12">
                                    <label>Email</label>
                                    <input type="text" name="username" class="form-control" placeholder="email">
                                </div>
                                <div class="col-12">
                                    <label>WhatsApp</label>
                                    <input type="text" name="username" class="form-control" placeholder="Qual seu número com WhatsApp">
                                </div>
                                <div class="col-12">
                                    <label>Senha</label>
                                    <input type="password" name="password" class="form-control" placeholder="senha">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success float-end">Cadastrar</button>
                                </div>
                            </form>
                            <hr class="mt-4">
                            <div class="col-12">
                                <p class="text-center mb-0">Já tem uma conta? <a href="App/View/login.php">Faça o login.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
        -->
    </body>

    </html>