<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
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

/* Default Controller */
$route['default_controller'] = 'welcome';

/* Dashboard Pages */
$route['dashboard'] = 'admin/dashboard/dashboard';
$route['dashboard2'] = 'admin/dashboard/dashboard2';
$route['dashboard3'] = 'admin/dashboard/dashboard3';

/* Calendar Pages */
$route['calendar'] = 'admin/calendar/calendar';

/* Chart Pages */
$route['chartjs'] = 'admin/charts/chartjs';
$route['flot'] = 'admin/charts/flot';
$route['inline'] = 'admin/charts/inline';
$route['uplot'] = 'admin/charts/uplot';

/* Gallery Pages */
$route['gallery'] = 'admin/gallery/gallery';

/* Kanban Pages */
$route['kanban'] = 'admin/kanban/kanban';

/* Widget Pages */
$route['widgets'] = 'admin/widgets/widgets';

/* Form Pages */
$route['advanced'] = 'admin/forms/advanced';
$route['editors'] = 'admin/forms/editors';
$route['general'] = 'admin/forms/general';
$route['validation'] = 'admin/forms/validation';

/* Table Pages */
$route['data'] = 'admin/tables/data';
$route['jsgrid'] = 'admin/tables/jsgrid';
$route['simple'] = 'admin/tables/simple';

/* Mailbox Pages */
$route['compose'] = 'admin/mailbox/compose';
$route['mailbox'] = 'admin/mailbox/mailbox';
$route['read-mail'] = 'admin/mailbox/read_mail';

/* UI Pagess */
$route['button'] = 'admin/ui/button';
$route['generals'] = 'admin/ui/general';
$route['icons'] = 'admin/ui/icons';
$route['modals'] = 'admin/ui/modals';
$route['navbar'] = 'admin/ui/navbar';
$route['ribbons'] = 'admin/ui/ribbons';
$route['sliders'] = 'admin/ui/sliders';
$route['timeline'] = 'admin/ui/timeline';

/* Search Pages */
$route['enhanced-results'] = 'admin/search/enhanced_result';
$route['enhanced'] = 'admin/search/enhanced';
$route['simple-results'] = 'admin/search/simple_result';
$route['simples'] = 'admin/search/simple';

/* Layout Pages */
$route['boxed'] = 'admin/layout/boxed';
$route['collapsed-sidebar'] = 'admin/layout/collapsed_sidebar';
$route['fixed-footer'] = 'admin/layout/fixed_footer';
$route['fixed-sidebar-custom'] = 'admin/layout/fixed_sidebar_custom';
$route['fixed-sidebar'] = 'admin/layout/fixed_sidebar';
$route['fixed-topnav'] = 'admin/layout/fixed_topnav';
$route['top-nav-sidebar'] = 'admin/layout/top_nav_sidebar';
$route['top-nav'] = 'admin/layout/top_nav';

/* Example Pages */
$route['not-found'] = 'admin/examples/not_found';
$route['internal-server'] = 'admin/examples/internal_server';
$route['blank'] = 'admin/examples/blank';
$route['contact-us'] = 'admin/examples/contact_us';
$route['contacts'] = 'admin/examples/contacts';
$route['e-commerce'] = 'admin/examples/e_commerce';
$route['faq'] = 'admin/examples/faq';
$route['forgot-password-v2'] = 'admin/examples/forgot_password_v2';
$route['forgot-password'] = 'admin/examples/forgot_password';
$route['invoice-print'] = 'admin/examples/invoice_print';
$route['invoice'] = 'admin/examples/invoice';
$route['language-menu'] = 'admin/examples/language_menu';
$route['legacy-user-menu'] = 'admin/examples/legacy_user_menu';
$route['lockscreen'] = 'admin/examples/lockscreen';
$route['login-v2'] = 'admin/examples/login_v2';
$route['login'] = 'admin/examples/login';
$route['pace'] = 'admin/examples/pace';
$route['profile'] = 'admin/examples/profile';
$route['project-add'] = 'admin/examples/project_add';
$route['project-detail'] = 'admin/examples/project_detail';
$route['project-edit'] = 'admin/examples/project_edit';
$route['projects'] = 'admin/examples/projects';
$route['recover-password-v2'] = 'admin/examples/recover_password_v2';
$route['recover-password'] = 'admin/examples/recover_password';
$route['register-v2'] = 'admin/examples/register_v2';
$route['register'] = 'admin/examples/register';

/* iframe pages */
$route['iframe'] = 'admin/iframe/iframe';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
