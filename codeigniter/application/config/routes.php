<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['rooms/(:any)'] = 'rooms/view/$1';
$route['rooms'] = 'rooms/view';
$route['customers/update/(:any)'] = 'customers/update/$1';
$route['customers/update'] = 'customers/update';
$route['customers/delete/(:any'] = 'customers/delete/$1';
$route['customers/create'] = 'customers/create';
$route['customers/(:any)'] = 'customers/view/$1';
$route['customers'] = 'customers/view';
$route['employees/update/(:any)'] = 'employees/update/$1';
$route['employees/update'] = 'employees/update';
$route['employees/delete/(:any)'] = 'employees/delete/$1';
$route['employees/create'] = 'employees/create';
$route['employees/(:any)'] = 'employees/view/$1';
$route['employees'] = 'employees/view';
$route['bookings/update/(:any)'] = 'bookings/update/$1';
$route['bookings/update'] = 'bookings/update';
$route['bookings/delete/(:any)'] = 'bookings/delete/$1';
$route['bookings/create'] = 'bookings/create';
$route['bookings/(:any)'] = 'bookings/view/$1';
$route['bookings'] = 'bookings/view';
$route['ceil/(:any)'] = 'ceil/view/$1';
$route['ceil'] = 'ceil/view';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['profiler'] = "Profiler_controller"; 
$route['profiler/disable'] = "Profiler_controller/disable";