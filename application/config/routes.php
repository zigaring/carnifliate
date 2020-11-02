<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin'] = 'admin/login';
$route['admin/logout'] = 'admin/logout';
$route['admin/shows'] ='admin/shows';  //zaradi loopa
$route['admin/shows/edit/(:any)'] ='admin/shows/edit/$1';
$route['admin/shows/update'] = 'admin/shows/update';
$route['admin/shows/(:any)'] = 'admin/login';
$route['admin/galleries/gallery_insert'] = 'admin/galleries/gallery_insert';
$route['admin/(:any)'] ='admin/login';

$route['about'] = 'admin/about';
$route['delete'] ='admin/login';
$route['create'] ='admin/login';
$route['edit'] ='admin/login';
$route['galleries'] ='admin/galleries';

$route['shows'] = 'admin/shows';
$route['shows/create'] = 'admin/shows/create';
$route['shows/(:any)'] ='admin/login';


$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
