<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['jewels/random_products'] ='jewels/random_products';
$route['jewels/create'] ='jewels/create';
$route['jewels/update'] ='jewels/update';
$route['jewels/(:any)'] = 'jewels/view/$1';
$route['jewels'] ='jewels/index';


$route['default_controller'] = 'pages/view';

$route['categories'] = 'categories/index';
$route['categories/create'] = 'categories/create';
$route['categories/jewels/(:any)'] = 'categories/jewels/$1';


$route['categories'] = 'categories/index';
//$route['categories/create'] = 'categories/create';
$route['categories/jewels/(:any)'] = 'categories/jewels/$1';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
