<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login'] = 'pages/login';
$route['logout'] = 'pages/logout';
$route['addSchedule'] = 'pages/addSchedule';
$route['teacherpreferred'] = 'pages/teacherpreferred';
$route['default_controller'] = 'pages/login';
$route['chairperson/(:any)'] = 'pages/view/chairperson/$1'; 
$route['teacher/(:any)'] = 'pages/view/teacher/$1'; 
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

?>