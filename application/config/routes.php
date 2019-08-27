<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'LoginController';
$route['page/editdataduta/(:any)'] = 'page/editdataduta/$1';
$route['page/editkriteria/(:any)'] = 'page/editkriteria/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
