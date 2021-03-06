<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = "principal";
$route['404_override'] = 'principal';


// Usuários
$route['usuario'] = 'usuario';
$route['login'] = 'usuario/login';
$route['logout'] = 'usuario/logout';
$route['alterar-senha'] = 'usuario/alterarsenha';
$route['usuario/adicionar'] = 'usuario/adicionar';
$route['usuario/(:num)'] = 'usuario/editar/$1';
$route['usuario/(:num)/excluir'] = 'usuario/excluir/$1';

/* Funcionários*/
$route['funcionario/list'] = 'funcionarios';
$route['funcionario/add'] = 'funcionarios/adicionar';
$route['funcionario/(:num)'] = 'funcionarios/editar/$1';
$route['funcionario/excluir/(:num)'] = 'funcionarios/excluir/$1';
$route['funcionario/getfuncionario/(:any)'] = 'funcionarios/getFunByIdPessoaajax/$1';


/* Propiedades*/
$route['propiedade/list'] = 'propiedade';
$route['propiedade/add'] = 'propiedade/adicionar';
$route['propiedade/(:num)'] = 'propiedade/editar/$1';
$route['propiedade/excluir/(:num)'] = 'propiedade/excluir/$1';


/* Praga*/
$route['principal/pega-praga'] = 'principal/pegaPragas';

$route['praga/list'] = 'praga';
$route['praga/add'] = 'praga/adicionar';
$route['praga/(:num)'] = 'praga/editar/$1';
$route['praga/excluir/(:num)'] = 'praga/excluir/$1';

$route['praga/page/(:num)'] = 'praga';


$route['pergunta/list'] = 'pergunta';
$route['pergunta/add'] = 'pergunta/adicionar';
$route['pergunta/(:num)'] = 'pergunta/editar/$1';
$route['pergunta/excluir/(:num)'] = 'pergunta/excluir/$1';

$route['pergunta/page/(:num)'] = 'pergunta';



$route['menu/list'] = 'menu';
$route['menu/add'] = 'menu/adicionar';
$route['menu/(:num)'] = 'menu/editar/$1';
$route['menu/excluir/(:num)'] = 'menu/excluir/$1';


$route['permissao/list'] = 'permissao';
$route['permissao/add'] = 'permissao/adicionar';
$route['permissao/(:num)'] = 'permissao/editar/$1';
$route['permissao/excluir/(:num)'] = 'permissao/excluir/$1';

$route['relatorio/1'] = 'relatorio/rel1';
$route['relatorio/2'] = 'relatorio/rel2';
$route['relatorio/3'] = 'relatorio/rel3';
$route['relatorio/4'] = 'relatorio/rel4';