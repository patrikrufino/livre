<?php

class Livro {
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

    /**
     * @return mixed
     */
    public function getIdLivro()
    {
        return $this->id_livro;
    }

    /**
     * @param mixed $id_livro
     */
    public function setIdLivro($id_livro): void
    {
        $this->id_livro = $id_livro;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param mixed $autor
     */
    public function setAutor($autor): void
    {
        $this->autor = $autor;
    }

    /**
     * @return mixed
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * @param mixed $ano
     */
    public function setAno($ano): void
    {
        $this->ano = $ano;
    }

    /**
     * @return mixed
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * @param mixed $genero
     */
    public function setGenero($genero): void
    {
        $this->genero = $genero;
    }

    /**
     * @return mixed
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @param mixed $quantidade
     */
    public function setQuantidade($quantidade): void
    {
        $this->quantidade = $quantidade;
    }

    /**
     * @return mixed
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * @param mixed $isbn
     */
    public function setIsbn($isbn): void
    {
        $this->isbn = $isbn;
    }

    /**
     * @return mixed
     */
    public function getPaginas()
    {
        return $this->paginas;
    }

    /**
     * @param mixed $paginas
     */
    public function setPaginas($paginas): void
    {
        $this->paginas = $paginas;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor): void
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * @param mixed $id_usuario
     */
    public function setIdUsuario($id_usuario): void
    {
        $this->id_usuario = $id_usuario;
    }

    public function inserirBD()
    {
        require_once '../Config/ConexaoBD.php';

        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO livros (id_livro,titulo, autor, ano, genero, quantidade, isbn, paginas, descricao, valor, id_usuario)
            VALUES 
            (
                '".$this->id_livro."',
                '".$this->titulo."',
                '".$this->autor."',
                '".$this->ano."',
                '".$this->genero."',
                '".$this->quantidade."',
                '".$this->isbn."',
                '".$this->paginas."',
                '".$this->descricao."',
                '".$this->valor."',
                '".$this->id_usuario."'
            )";

        if ($conn->query($sql) === true) {
            $this->id_livro = mysqli_insert_id($conn);
            $conn->close();
            return true;

        }

        $conn->close();
        return false;
    }

    public function excluirBD($id_livro)
    {
        require_once '../Config/ConexaoBD.php';

        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "DELETE FROM livros WHERE id_livro = '".$id_livro."'";

        if ($conn->query($sql) === true) {

            $conn->close();
            return true;

        }

        $conn->close();
        return false;
    }

    public function listaLivros_usuario($id_usuario)
    {
        require_once '../Config/ConexaoBD.php';

        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM livros WHERE id_usuario =  '".$id_usuario."'" ;
        $re = $conn->query($sql);
        $conn->close();
        return $re;
    }

    public function listalivros()
    {
        require_once '../Config/ConexaoBD.php';

        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM livros" ;
        $re = $conn->query($sql);
        $conn->close();
        return $re;
    }

    public function atualizarBD()
    {
        require_once '../Config/ConexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE livros SET 
            '".$this->titulo."',
            '".$this->autor."',
            '".$this->ano."',
            '".$this->genero."',
            '".$this->quantidade."',
            '".$this->isbn."',
            '".$this->paginas."',
            '".$this->descricao."',
            '".$this->valor."',
            '".$this->id_usuario."'
            
            WHERE id_livro = '".$this->id_livro."'
        ";

        if ($conn->query($sql) === TRUE) {
            $conn->close();
            return TRUE;

        }

        $conn->close();
        return FALSE;
    }
    }