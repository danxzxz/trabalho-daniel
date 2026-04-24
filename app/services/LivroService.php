<?php 

namespace app\services;

use app\models\Livro;
use app\repositories\LivroRepository;

class LivroService {

    private LivroRepository $repository;

    public function __construct(){

        $this->repository = new LivroRepository();

    }

    public function getLivros(){
        return $this->repository->getLivros();
    
    }

    public function getLivro(int $id){
        return $this->repository->getLivro($id);
    }

    public function saveLivro(Livro $livro){
        return $this->repository->saveLivro($livro);
    }
    public function updateLivro(Livro $livro)
    {
        return $this->repository->update($livro);
    }
    public function deleteLivro(int $id)
    {
        return $this->repository->delete($id);
    }
}