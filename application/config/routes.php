<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin']='admin/index';
$route['admin/menu/edit/(:any)'] = 'menus/edit/$1';
$route['admin/menu/create'] = 'menus/create';
$route['admin/menu'] = 'menus/index';
$route['admin/pages/edit/(:any)']='pages/edit/$1';
$route['admin/pages/create']='pages/create';
$route['admin/pages']='pages/index';
$route['admin/posts']='admin/posts';
$route['admin/posts/create']='posts/create';
$route['admin/posts/edit/(:any)']='posts/edit/$1';
$route['posts/create']='posts/create';
$route['posts/update']='posts/update';
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts']="posts/index";
$route['categories']='categories/index';
$route['categories/add']='categories/add';
$route['categories/posts/(:any)']='categories/posts/$1';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
