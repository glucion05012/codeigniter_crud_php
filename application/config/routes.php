<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// api
$route['readall'] = 'restapi/index';
//db2
$route['readall2'] = 'restapi/db2';


//view
$route['posts'] = 'posts/index';
//view by id
$route['posts/(:num)'] = 'posts/view/$1';
//create
$route['posts/create'] = 'posts/create';
//update
$route['posts/update'] = 'posts/update';
// pages
$route['(:any)'] = 'pages/view/$1';
