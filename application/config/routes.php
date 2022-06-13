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



$route['default_controller'] = 'main';

$route['home'] = 'main/home';

$route['workshops'] = 'main/workshops'; 

$route['do_upload'] = 'main/do_upload';

$route['manage_workshops'] = 'main/manage_workshops';
$route['show_workshop/(:any)'] = 'main/show_workshop/$1';

$route['add_workshop'] = 'main/add_workshop'; 
$route['add_workshop_to_database'] = 'main/add_workshop_to_database'; 



//$route['register'] = 'main/register'; 
//$route['register_user'] = 'main/register_user'; 
//$route['login'] = 'main/login'; 
//$route['login_user'] = 'main/login_user'; 
//$route['logout'] = 'main/logout'; 
//$route['profile/(:any)'] = 'main/profile/$1';






/*
$route['adduser'] = 'main/adduser'; 
$route['add'] = 'main/add'; 

$route['show/(:any)'] = 'main/show/$1';

$route['show/edit_user/(:any)'] = 'main/edit_user/$1';
$route['show/edit_user/edit/(:any)'] = 'main/edit/$1';

$route['edit_user/(:any)'] = 'main/edit_user/$1';
$route['edit_user/edit/(:any)'] = 'main/edit/$1';

$route['remove/(:any)'] = 'main/remove/$1';

*/

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
