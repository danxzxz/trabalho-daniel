<?php 

namespace app\services;

use app\models\Jogador;
use app\repositories\JogadorRepository;

class JogadorService {

    private JogadorRepository $repository;

    public function __construct(){

        $this->repository = new JogadorRepository();

    }

    public function getJogadores(){
        return $this->repository->getJogadores();
    
    }

    public function getJogador(int $id){
        return $this->repository->getJogador($id);
    }

    public function saveJogador(Jogador $jogador){
        return $this->repository->saveJogador($jogador);
    }
    public function updateJogador(Jogador $jogador)
    {
        return $this->repository->update($jogador);
    }
}