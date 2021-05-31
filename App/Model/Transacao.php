<?php
class Transacao
{
    private $id_transacao;
    private $valor;
    private $data;
    private $tipo;
    private $id_usuario;
    private $id_livro;

}

// Getters e Setter
public function getIdTransacao()
{
    return $this->id_transacao;
}

public function setIdTransacao($id_transacao)
{
    $this->$id_transacao = $id_transacao;
}

?>
