<?php
require_once 'includes/header.php';
?>
    <main>
        <!--Login-->
        <section>
            <div class="container mt-5">
                <div class="d-flex justify-content-center">
                    <a href="/livre/"><img class="mt-5 mb-3" src="https://github.com/patrikrufino/livre/blob/main/Public/Img/livre_logo.png?raw=true" alt="Logo Livre" style="max-width: 170px;"></a>
                </div>
                <div class="mt-5 d-flex justify-content-center">
                    <h4>Bem-vindo de volta!</h4>
                </div>
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <div class="login-form bg-white shadow mt-4 p-4">
                            <form action="/App/Controller/navegacao.php" method="POST" class="row g-3">
                                <p><strong>Já possui uma conta?</strong> Prencha para continuar.</p>
                                <div class="col-12">
                                    <label>Email</label>
                                    <input type="text" name="username" class="form-control" placeholder="email">
                                </div>
                                <div class="col-12">
                                    <label>Senha</label>
                                    <input type="password" name="password" class="form-control" placeholder="senha">
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Lembrar de mim</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <a class="float-begin" href="#">Esqueci a senha!</a>
                                    <button type="submit" class="btn btn-success float-end">Login</button>
                                </div>
                            </form>
                            <hr class="mt-4">
                            <div class="col-12">
                                <p id="registro" class="text-center mb-0">Ainda não tem uma conta? <a href="/App/View/register.php">Cadastre-se!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
require_once 'includes/footer.php'
?>