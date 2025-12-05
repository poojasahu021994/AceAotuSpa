<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login']='Home/login';
$route['signUp']='Home/signUp';
$route['about']='Home/about';
$route['services']='Home/services';
$route['servicesDetails']='Home/servicesDetails';
$route['dashboard']='Home/dashboard';
$route['myBooking']='Home/myBooking';
$route['myProfileInfo']='Home/myProfileInfo';
$route['notifications']='Home/notifications';
$route['settings']='Home/settings';
$route['transactionsHistory']='Home/transactionsHistory';
$route['checkout']='Home/checkout';
$route['cart']='Home/cart';
$route['bookingHistory']='Home/bookingHistory';
$route['logout']='Home/logout';


