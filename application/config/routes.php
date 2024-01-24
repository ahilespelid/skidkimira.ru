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
|	http://codeigniter.com/user_guide/general/routing.html
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

$route['default_controller'] = 'welcome';
$route['404_override'] = 'welcome/notfound';

$route['catalogue/discount'] = 'discounts/listing';
$route['catalogue/discount/actual/(:num)'] = 'discounts/listing/$1';
$route['catalogue/discount/actual/(:num)/p/(:num)'] = 'discounts/listing/$1/$2';

$route['catalogue/discount/cat/(:num)'] = 'discounts/cat/$1';
$route['catalogue/discount/cat/(:num)/actual/(:num)/p/(:num)'] = 'discounts/cat/$1/$2/$3';

$route['catalogue/discount/subcat/(:num)'] = 'discounts/subcat/$1';
$route['catalogue/discount/subcat/(:num)/actual/(:num)/p/(:num)'] = 'discounts/subcat/$1/$2/$3';

$route['catalogue/discount/tc/(:num)'] = 'discounts/tc/$1';//!!!
$route['catalogue/discount/tc/(:num)/actual/(:num)/p/(:num)'] = 'discounts/tc/$1/$2/$3';//!!!


$route['discount/(:num)'] = 'discounts/details/$1';
$route['discount/url/(:num)'] = 'discounts/url/$1';
$route['company/(:num)'] = 'companies/details/$1';
$route['company/url/(:num)'] = 'companies/url/$1';
$route['brand/(:num)'] = 'brands/details/$1';
$route['tcbrand/(:num)'] = 'tradecenters/details/$1';


$route['catalogue/brands'] = 'brands/listing';
$route['catalogue/brands/cat/(:any)'] = 'brands/cat/$1';
$route['catalogue/brands/name/(:any)'] = 'search/brands/$1';

$route['catalogue/companycatalogs'] = 'companies/companycatalogslisting';
$route['catalogue/companycatalogs/city/(:num)'] = 'companies/companycatalogslisting/$1';
$route['catalogue/companycatalogs/city/(:num)/p/(:num)'] = 'companies/companycatalogslisting/$1/$2';
//$route['catalogue/companycatalogs/cat'] = 'companies/companycatalogscat/1';
$route['catalogue/companycatalogs/cat/(:num)'] = 'companies/companycatalogscat/1/$1';
$route['catalogue/companycatalogs/cat/(:num)/p/(:num)'] = 'companies/companycatalogscat/$1/$2';


$route['catalogue/company'] = 'companies/listing';
$route['catalogue/company/city/(:num)'] = 'companies/listing/$1';
$route['catalogue/company/city/(:num)/p/(:num)'] = 'companies/listing/$1/$2';
$route['catalogue/company/cat/(:num)'] = 'companies/cat/1/$1';
$route['catalogue/company/city/(:num)/cat/(:num)/p/(:num)'] = 'companies/cat/$1/$2/$3';
$route['catalogue/company/city/(:num)/cat/(:num)'] = 'companies/cat/$1/$2';

$route['catalogue/tradecenters'] = 'tradecenters/listing';
$route['catalogue/tradecenters/city/(:num)'] = 'tradecenters/listing/$1';
$route['catalogue/tradecenters/city/(:num)/p/(:num)'] = 'tradecenters/listing/$1/$2';
        
$route['catalogue/tradecenters/firstLetter/(:any)'] = 'welcome/redirrecttomains'; //not done, because not have html

$route['catalogue/stockcenters'] = 'stockcenters/listing';
$route['catalogue/stockcenters/city/(:num)'] = 'stockcenters/listing/$1';
$route['catalogue/stockcenters/city/(:num)/p/(:num)'] = 'stockcenters/listing/$1/$2';
$route['catalogue/stockcenters/cat/(:num)'] = 'stockcenters/cat';
$route['catalogue/stockcenters/subcat/(:num)'] = 'stockcenters/subcat';


$route['catalogue/webshops'] = 'webshops/listing';
$route['catalogue/webshops/city/(:num)'] = 'webshops/listing/$1';
$route['catalogue/webshops/city/(:num)/p/(:num)'] = 'webshops/listing/$1/$2';
$route['catalogue/webshops/cat/(:num)'] = 'webshops/cat/1/$1';
$route['catalogue/webshops/city/(num)/cat/(:num)/'] = 'webshops/cat/$1';
$route['catalogue/webshops/city/(num)/cat/(:num)/p/(:num)'] = 'webshops/cat/$1/$2/$3';
$route['auth'] = 'auth/index';
$route['auth/(:any)'] = 'auth/$1';
$route['admin'] = 'admin/index';
$route['admin/(:any)'] = 'admin/$1';
$route['moderator'] = 'moderator/index';
$route['moderator/(:any)'] = 'moderator/$1';
$route['search'] = 'search/index';
$route['servic(:any)'] = 'welcome/tohome';

$route['catalogue/discount/name/(:any)'] = 'search/discount/$1';
$route['catalogue/companycatalogs/name/(:any)'] = 'search/company/$1';
$route['catalogue/tradecenters/name/(:any)'] = 'search/tc/$1';


$route['(:any)'] = 'welcome/custompage/$1';

$route['translate_uri_dashes'] = FALSE;

$route['generate_sitemap'] = 'sitemap/index';