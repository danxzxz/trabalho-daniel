<?php

namespace app\controllers;

use DateTimeImmutable;
use app\core\Controller;
use app\models\Livro;
use app\services\LivroService;

class LivroController extends Controller
{
    private LivroService $service;

    public function __construct()
    {
        $this->service = new LivroService();
    }

    public function listarTodos()
    {

        $data['lista'] = $this->service->getLivros();
        $this->view('livros/livros_list', $data);
    }

    public function verLivro()
    {

        if (!isset($_GET['id'])) {
            $this->redirect(URL_BASE . '/livros');
        }

        $id = $_GET['id'];

        $data['livro'] = $this->service->getLivro($id);

        $this->view('livros/livros_show', $data);
    }

    public function criar()
    {
        $this->autenticacaoRequired();

        $this->view('livros/livros_create', []);
    }

public function editar()
{
    $this->autenticacaoRequired(); 
    
    if (!isset($_GET['id'])) {
        $this->redirect(URL_BASE . '/livros');
    }

    $id = $_GET['id'];
    $data['livro'] = $this->service->getLivro($id); 
    
    if (!$data['livro']) {
        $this->redirect(URL_BASE . '/livros');
    }

    $this->view('livros/livros_edit', $data);
}

public function atualizar()
{
    $this->adminRequired();

    $livro = new Livro();
    $livro->setId($_POST['id']);
    $livro->setTitulo($_POST['titulo']);
    $livro->setDataLancamento($_POST['dataLancamento']);
    $livro->setPais($_POST['pais']);
    $livro->setPaginas($_POST['paginas']);
    $livro->setGenero($_POST['genero']);
    $livro->setCapa($_POST['capa'] ?? ''); 

    $this->service->updateLivro($livro);
    
    $this->redirect(URL_BASE . '/livros');
}

    public function salvar()
    {
        $this->adminRequired();

        $titulo = $_POST['titulo'];
        $nascimento = $_POST['dataLancamento'];
        $pais = $_POST['pais'];
        $paginas = $_POST['paginas'];
        $genero = $_POST['genero'];
        $capa = $_POST['capa'] ?? '';


        $livro = new Livro();

        $livro->setTitulo($titulo);
        $livro->setDataLancamento($nascimento);
        $livro->setPais($pais);
        $livro->setPaginas($paginas);
        $livro->setGenero($genero);
        $livro->setCapa($capa);

        $this->service->saveLivro($livro);

        $this->redirect(URL_BASE . '/livros');
    }

    public function excluir()
    {
    $this->adminRequired(); // Garante segurança para a operação [5]

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $this->service->deleteLivro($id);
    }

    $this->redirect(URL_BASE . '/livros');
    }

    public function redirecionarTeste()
    {
        $this->redirect("http://google.com");
    }
}