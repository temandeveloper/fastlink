<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['article']= 'MainController/opennews';
$route['article/all/(:any)']= 'MainController/getpage/$1';

$route['createlink'] = 'MainController/createlink';
$route['gettranslation'] = 'MainController/gettranslation';
$route['lst'] = 'MainController/livespeech';
$route['checklink'] = 'MainController/checklink';
$route['(:any)'] = 'MainController/shortlink';
$route['update/(:any)'] = 'MainController/update/$1';
$route['editslide/(:any)'] = 'MainController/editslide/$1';
$route['updateslide/(:any)'] = 'MainController/slideupdate/$1';
$route['deleteberita/(:any)'] = 'MainController/deleteberita/$1';
$route['deletelog/(:any)'] = 'MainController/delRiwayat/$1';
$route['administrator'] = 'Login/sessCheck/';
$route['login'] = 'Login/viewLogin';
$route['Login'] = 'Login/dashboardView';
$route['Login/logout'] = 'Login/logout';
$route['dashboard'] = 'MainController/adminView/$1';
$route['article/(:any)'] = 'MainController/view/$1';
$route['MainController/kembali-upload'] = 'MainController/kembaliUpload';
$route['MainController/slideupdate/kembali-upload-slide'] = 'MainController/kembaliUploadSlide';
$route['upload-news'] = 'MainController/uploadNews/$s';
$route['default_controller'] = 'MainController/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
