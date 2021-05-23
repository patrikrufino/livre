<?php
require_once 'includes/header.php';
?>
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
<?php
require_once 'includes/footer.php'
?>