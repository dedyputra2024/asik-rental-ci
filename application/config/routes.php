<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about'] = 'home/about';
$route['vehicle'] = 'home/vehicle';
$route['contact'] = 'home/contact';
