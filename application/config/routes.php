<?php
defined('BASEPATH') OR exit('No direct script access allowed');




//User Account Routes For Buyers and Farmers
$route['farmers/login'] = 'Users/login_farmers';
$route['farmers/register'] = 'Users/register_farmer';
$route['buy/login'] = 'Users/login_buyers';
$route['buy/register'] = 'Users/register_buyer';
//



$route['buyers/create_demand'] = 'Buyers/post';
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
