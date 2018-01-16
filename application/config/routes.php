<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['admin/changePassword'] = 'admin/changePassword';
$route['admin/input/(:any)'] = 'input/index/$1';
$route['bangun/(:any)'] = 'pages/bangun/$1';
$route['viewagenda/(:any)'] = 'pages/viewagenda/$1';
$route['admin/profile'] = 'admin/profile';
$route['login'] = 'admin/login';
$route['logout'] = 'admin/logout';
$route['admin/(:any)'] = 'admin/view/$1';
$route['admin'] = 'admin/index';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
