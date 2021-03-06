<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller']        = "home";
$route['admin']                     = "home/admin";
$route['404_override']              = '';

$route['update/(:any)']             = 'game/update/$1';
$route['game/getversion']           = 'game/get_version';
$route['game/getskin']              = 'game/get_skin';

$route['server/(:any)']             = 'servers/index/$1';

$route['user/(:any)']               = 'users/index/$1';

$route['server_query']              = 'server_query/run';

// skin controller
$route['skin/set_active/(:num)']            = 'skins/set_active/$1';
$route['skin/download/(:num)']              = 'skins/download/$1';
$route['skin/remove_active']                = 'skins/remove_active';
$route['skin/add_to_library/(:num)']        = 'skins/add_to_library/$1';
$route['skin/remove_from_library/(:num)']   = 'skins/remove_from_library/$1';
$route['skin/json/(:num)']                  = 'skins/json_single/$1';
$route['skin/(:any)']                       = 'skins/index/$1';


/* End of file routes.php */
/* Location: ./application/config/routes.php */