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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'Usuarios/login';
$route['plataformaCRUD'] = "plataformaCRUD/index";
$route['plataformaCRUD/(:num)'] = "plataformaCRUD/show/$1";
$route['plataformaCRUDCreate']['post'] = "plataformaCRUD/store";
$route['plataformaCRUDEdit/(:any)'] = "plataformaCRUD/edit/$1";
$route['plataformaCRUDUpdate/(:any)']['put'] = "plataformaCRUD/update/$1";
$route['plataformaCRUDDelete/(:any)']['delete'] = "plataformaCRUD/delete/$1";
$route['vendedorCRUD'] = "vendedorCRUD/index";
$route['vendedorCRUD/(:num)'] = "vendedorCRUD/show/$1";
$route['vendedorCRUDCreate']['post'] = "vendedorCRUD/store";
$route['vendedorCRUDEdit/(:any)'] = "vendedorCRUD/edit/$1";
$route['vendedorCRUDUpdate/(:any)']['put'] = "vendedorCRUD/update/$1";
$route['vendedorCRUDDelete/(:any)']['delete'] = "vendedorCRUD/delete/$1";
$route['cobradorCRUD'] = "cobradorCRUD/index";
$route['cobradorCRUD/(:num)'] = "cobradorCRUD/show/$1";
$route['cobradorCRUDCreate']['post'] = "cobradorCRUD/store";
$route['cobradorCRUDEdit/(:any)'] = "cobradorCRUD/edit/$1";
$route['cobradorCRUDUpdate/(:any)']['put'] = "cobradorCRUD/update/$1";
$route['cobradorCRUDDelete/(:any)']['delete'] = "cobradorCRUD/delete/$1";
$route['municipioCRUD'] = "municipioCRUD/index";
$route['municipioCRUD/(:num)'] = "municipioCRUD/show/$1";
$route['municipioCRUDCreate']['post'] = "municipioCRUD/store";
$route['municipioCRUDEdit/(:any)'] = "municipioCRUD/edit/$1";
$route['municipioCRUDUpdate/(:any)']['put'] = "municipioCRUD/update/$1";
$route['municipioCRUDDelete/(:any)']['delete'] = "municipioCRUD/delete/$1";




