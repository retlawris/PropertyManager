<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'backend/auth';
$route['(:any)'] = 'backend/$1';
$route['(:any)'] = 'backend/ajax/$1';
$route['(:any)'] = '$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

