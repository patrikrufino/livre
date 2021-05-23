<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Novo Livro</title>
</head>

<body class="bg-light">

    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-prymary bg-light shadow-lg">
        <div class="container-fluid ">
            <a class="navbar-brand p-3" href="home.php"><img src="https://github.com/patrikrufino/livre/blob/main/Resources/Img/livre_logo.png?raw=true" alt="livre_logo" style="max-width: 50px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav p-3">
                    <li class="nav-item px-2">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="#">Livros disponíveis</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
            </div>
            <div>
                <ul class="navbar-nav p-3">
                    <li class="nav-item px-2">
                        <a class="nav-link active" aria-current="page" href="register.php">Registrar</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="d-flex justify-content-center mt-5">
        <h1 style="color: grey;">
            Novo livro
        </h1>
    </div>

    <section class="d-flex justify-content-center mt-5">
        <div class="container col-md-8 bg-white shadow">
            <form method="post">
                <div class="form-group m-2">
                    <label class="float-begin mb-2">Titulo</label>
                    <input type="text" class="form-control" name="Titulo" placeholder="Titulo do livro">
                </div>
                <div class="form-group m-2">
                    <label class="float-begin mb-2">Autor</label>
                    <input type="text" class="form-control" name="Autor" placeholder="Autor do livro">
                </div>
                <div class="row">
                    <div class="row col">
                        <div class="form-group m-2 col">
                            <label class="float-begin mb-2">Ano</label>
                            <input type="number" class="form-control" name="Titulo" placeholder="Ano de publicação">
                        </div>
                        <div class="form-group m-2 col">
                            <label class="float-begin mb-2">Páginas</label>
                            <input type="number" class="form-control" name="Titulo" placeholder="Quantidade de páginas">
                        </div>
                    </div>
                    <div class="form-group m-2 col">
                        <label class="float-begin mb-2">Gênero</label>
                        <input type="date" class="form-control" name="Titulo" placeholder="Ano de publicação">
                    </div>
                </div>
                <div class="row">
                    <div class="row col">
                        <div class="form-group m-2 col">
                            <label class="float-begin mb-2">ISBN</label>
                            <input type="number" class="form-control" name="Titulo" placeholder="ISBN">
                        </div>
                        <div class="form-group m-2 col">
                            <label class="float-begin mb-2">Quantidades</label>
                            <input type="number" class="form-control" name="Titulo" placeholder="Quantidade disponível">
                        </div>
                    </div>
                    <div class="row col">
                        <div class="form-check col m-5">
                            <input class="form-check-input" type="checkbox" id="sell-on">
                            <label class="form-check-label" for="rememberMe">Disponivel para venda?</label>
                        </div>
                        <div class="form-check col m-5">
                            <input class="form-check-input" type="checkbox" id="change-on">
                            <label class="form-check-label" for="rememberMe">Disponivel para troca?</label>
                        </div>
                    </div>
                </div>

                <div class="dflex">
                    <div>
                        <button type="submit" class="btn btn-success float-end m-2 mb-3">Cadastrar</button>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-danger float-begin m-2 mb-3">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
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