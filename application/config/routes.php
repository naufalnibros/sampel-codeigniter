<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$reoute['news/delete/(:any)'] = 'news/delete/$1';

$reoute['news/update/(:any)'] = 'news/update/$1';

$route['news/create'] = 'news/create';

$route['news'] = 'news';
$route['news/(:any)'] = 'news/view/$1';

$route['default_controller'] = 'halaman/view';

$route['(:any)'] = 'halaman/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
