<?php

private $id_livro;
private $titulo;
private $autor;
private $ano;
private $genero;
private $quantidade;
private $isbn;
private $paginas;
private $descricao;
private $valor;
private $id_usuario;

public function getIdLivro()
{
    return $this->id_livro;
}

public function setIdLivro($id_livro): void
{
    $this->$id_livro = $id_livro;
}