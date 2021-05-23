<?php
require_once 'includes/header.php';
?>
<?php
require_once 'includes/nav_no_auth.php';
?>
    <!-- Formulário para novos livros -->
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
                        <input type="text" class="form-control" name="Titulo" placeholder="Gênero do Livro">
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
<?php
require_once 'includes/footer.php'
?>