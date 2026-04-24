<?php

namespace app\repositories;

use app\database\ConnectionFactory;
use app\models\Livro;
use PDO;

class LivroRepository
{

    private PDO $connection;


    function __construct()
    {
        $this->connection = ConnectionFactory::getConnection();
    }

    public function getLivros(): array
    {

        $stm = $this->connection->prepare("SELECT * FROM livros");
        $stm->execute();

        $livros = $stm->fetchAll();

        return $livros;
    }

    public function getLivro(int $id)
    {

        $stm = $this->connection->prepare("SELECT * FROM livros WHERE id = :id");
        $stm->bindValue('id', $id);

        $stm->execute();

        $livro = $stm->fetch();

        return $livro;
    }

    public function saveLivro(Livro $livro)
    {

        $sql = "INSERT INTO livros (titulo, data_lancamento, pais, paginas, genero, capa) " .
            "VALUES(:titulo, :nascimento, :pais, :pag, :genero, :capa)";

        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(':titulo', $livro->getTitulo());
        $stmt->bindValue(':nascimento', $livro->getDataLancamento());
        $stmt->bindValue(':pais', $livro->getPais());
        $stmt->bindValue(':pag', $livro->getPaginas());
        $stmt->bindValue(':genero', $livro->getGenero());
        $stmt->bindValue(':capa', $livro->getCapa());

        return $stmt->execute();
    }

public function update(Livro $livro)
{
    $sql = "UPDATE livros SET titulo = :titulo, data_lancamento = :data, pais = :nac, paginas = :pag, genero = :gen, capa = :img 
            WHERE id = :id";

    $stmt = $this->connection->prepare($sql);
    
    $stmt->bindValue(':titulo', $livro->getTitulo());
    $stmt->bindValue(':data', $livro->getDataLancamento());
    $stmt->bindValue(':nac', $livro->getPais());
    $stmt->bindValue(':pag', $livro->getPaginas());
    $stmt->bindValue(':gen', $livro->getGenero());
    $stmt->bindValue(':img', $livro->getCapa());
    $stmt->bindValue(':id', $livro->getId()); 

    return $stmt->execute();
}

public function delete(int $id)
{
    $sql = "DELETE FROM livros WHERE id = :id";
    $stmt = $this->connection->prepare($sql);
    $stmt->bindValue(':id', $id);
    return $stmt->execute();
}

}