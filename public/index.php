<?php

require_once __DIR__ . '/../app/core/Autoload.php';
require_once __DIR__ . '/../app/config/Config.php';

use app\core\Router;

$router = new Router();

$router->get('/', 'LivroController@listarTodos');

// Livro Routes
$router->get('/livros', 'LivroController@listarTodos');
$router->get('/livros/livro', 'LivroController@verLivro');
$router->get('/livros/cadastrar', 'LivroController@criar');

$router->post('/livros/salvar', 'LivroController@salvar');
$router->get('/livros/editar', 'LivroController@editar');   
$router->post('/livros/atualizar', 'LivroController@atualizar');
$router->get('/livros/excluir', 'LivroController@excluir');


$router->get('/usuarios', 'UsuarioController@index');
$router->get('/usuarios/cadastrar', 'UsuarioController@cadastrar');
$router->post('/usuarios/salvar', 'UsuarioController@salvar');
$router->get('/usuarios/editar', 'UsuarioController@editar');
$router->post('/usuarios/atualizar', 'UsuarioController@atualizar');
$router->get('/usuarios/excluir', 'UsuarioController@excluir');

//Autenticacao
$router->get('/login', 'AutenticacaoController@login');
$router->post('/logar', 'AutenticacaoController@logar');



$router->get('/teste', 'LivroController@redirecionarTeste');



$router->run();
