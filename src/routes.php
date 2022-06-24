<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

//cadastrar usuarios
$router->get('/novo','UsuariosController@add');
$router->post('/novo','UsuariosController@addAction');

//update
$router->get('/usuario/{id}/update','UsuariosController@update');
$router->post('/usuario/{id}/update','UsuariosController@updateAction');

//delete
$router->get('/usuario/{id}/delete','UsuariosController@delete');