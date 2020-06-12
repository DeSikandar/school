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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['course-category/(:any)']='GetCourse/index/$1';
$route['admin']="Admin/Dashboard";
$route['admin/login']="Admin/Login/login";
$route['admin/logout']="Admin/Logout/index";
$route['admin/slider']="Admin/Dashboard/slider";
$route['admin/slider/upload']="Admin/Dashboard/upload";
$route['admin/category']="Admin/Dashboard/category";
$route['admin/category/add']="Admin/Dashboard/add_category";
$route['admin/category/join']="Admin/Dashboard/join";
$route['admin/course']="Admin/Dashboard/course";
$route['admin/course/add']="Admin/Dashboard/c_add";
$route['course/(:any)']="GetCourse/coursename/$1";
$route['course']="GetCourse/get_all_course";
$route['about_us']="welcome/about_us";
$route['gallery']="welcome/gallery";
$route['blog']="welcome/Blog";
$route['admin/testimonials']="Admin/Dashboard/testimonials";
$route['admin/gallery']="Admin/Dashboard/gallery";
$route['admin/gallery/upload']="Admin/Dashboard/g_upload";
$route['admin/testimonials/add']="Admin/Dashboard/testimonials_add";
$route['admin/blog']="Admin/Dashboard/blog";
$route['admin/blog_add']="Admin/Dashboard/blog_add";
$route['blog/(:any)']="welcome/blog/$1";
$route['search']="welcome/search";
$route['student_register']="welcome/student_singup";
$route['student_post']="welcome/student_postup";
$route['chanel_singup']="welcome/chanel_singup";
$route['chanel_post']="welcome/chanel_dataup";
$route['sign_in']="welcome/sign_in";
$route['sing_inpost']="welcome/sing_inpost";
$route['get_state']="welcome/get_state";
$route['get_city']="welcome/get_city";
$route['dashboard']="Dashboard";

$route['translate_uri_dashes'] = FALSE;
