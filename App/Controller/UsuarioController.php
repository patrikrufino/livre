<?php

if(!isset($_SESSION))
{
    session_start();
}

class UsuarioController
{
    public function inserir($nome, $email, $celular, $senha) {
        require_once '/Model/Usuario.php';
        $usuario = new Usuario();
        $usuario->setNome($nome);
        $usuario->setEmail($email);
        $usuario->setCelular($celular);
        $usuario->setSenha($senha);

        $r = $usuario->inserirBD();
        $_SESSION['usuario'] = serialize($usuario);
        return $r;
    }
}