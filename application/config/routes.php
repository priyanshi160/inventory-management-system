<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/inventory';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['inventory'] = 'pages/inventory';
$route['sales'] = 'pages/sales';
$route['new_item'] = 'pages/new_item';
$route['categories'] = 'pages/categories';
$route['accounts'] = 'pages/accounts';
$route['lagout'] = 'pages/lagout';
$route['localhost/POS-IMS-CI'] = 'localhost/POS-IMS-CI/inventory';
$route['pos'] = 'pos_con/pos';
$route['daily_sales_report'] = 'sales_con/daily_sales_report';
$route['weekly_sales_report'] = 'sales_con/weekly_sales_report';
$route['monthly_sales_report'] = 'sales_con/monthly_sales_report';
$route['yearly_sales_report'] = 'sales_con/yearly_sales_report';
$route['login'] = 'login_con/login';
$route['dashboard'] = 'pages/dashboard';
