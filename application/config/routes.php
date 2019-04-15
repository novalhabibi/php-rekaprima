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
$route['default_controller'] = 'overview';
$route['aboutus'] = 'overview/aboutus';
$route['sejarah'] = 'overview/sejarah';
$route['contact'] = 'overview/contact';
$route['visimisi'] = 'overview/visimisi';
$route['smart'] = 'overview/smart';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['dashboard']='BackendController';
$route['auth/login']='AuthController/login';
$route['auth/ceklogin']='AuthController/ceklogin';
$route['auth/logout']='AuthController/logout';

// Kategori Project
$route['dashboard/projek/kategori']='KategoriProjectController';
$route['projek/kategori/hapus/(:any)']='KategoriProjectController/hapus';
$route['projek/kategori/simpan']='KategoriProjectController/simpan';
$route['projek/kategori/update']='KategoriProjectController/update';
$route['dashboard/projek/kategori/edit/(:any)']='KategoriProjectController/edit';
$route['dashboard/projek/kategori/edit/(:any)']='KategoriProjectController/edit';
// End Kategori Project

// Project 
$route['dashboard/projek']='ProjectController';
$route['dashboard/projek/tambah']='ProjectController/tambah';
$route['projek/hapus/(:any)']='ProjectController/hapus';
$route['projek/simpan']='ProjectController/simpan';
$route['projek/update']='ProjectController/update';
$route['dashboard/projek/edit/(:any)']='ProjectController/edit';
// ENd Projek 

// Maintenance 
$route['dashboard/maintenance']='MaintenanceController';
$route['dashboard/maintenance/tambah']='MaintenanceController/tambah';
$route['maintenance/hapus/(:any)']='MaintenanceController/hapus';
$route['maintenance/simpan']='MaintenanceController/simpan';
$route['maintenance/update']='MaintenanceController/update';
$route['dashboard/maintenance/edit/(:any)']='MaintenanceController/edit';
$route['maintenances/(:any)']='MaintenanceController/show';
// ENd Maintenance

// Training 
$route['dashboard/training']='TrainingController';
$route['dashboard/training/tambah']='TrainingController/tambah';
$route['training/hapus/(:any)']='TrainingController/hapus';
$route['training/simpan']='TrainingController/simpan';
$route['training/update']='TrainingController/update';
$route['dashboard/training/edit/(:any)']='TrainingController/edit';
$route['trainings/(:any)']='TrainingController/show';

// ENd Training


// Service 
$route['dashboard/service']='ServiceController';
$route['dashboard/service/tambah']='ServiceController/tambah';
$route['service/hapus/(:any)']='ServiceController/hapus';
$route['service/simpan']='ServiceController/simpan';
$route['service/update']='ServiceController/update';
$route['dashboard/service/edit/(:any)']='ServiceController/edit';
$route['services/(:any)']='ServiceController/show';
// ENd Service

// News 
$route['dashboard/news']='NewsController';
$route['dashboard/news/tambah']='NewsController/tambah';
$route['news/hapus/(:any)']='NewsController/hapus';
$route['news/simpan']='NewsController/simpan';
$route['news/update']='NewsController/update';
$route['dashboard/news/edit/(:any)']='NewsController/edit';
// ENd News


// Client 
$route['dashboard/client']='ClientController';
$route['dashboard/client/tambah']='ClientController/tambah';
$route['client/hapus/(:any)']='ClientController/hapus';
$route['client/simpan']='ClientController/simpan';
$route['client/update']='ClientController/update';
$route['dashboard/client/edit/(:any)']='ClientController/edit';
// ENd Client

// Slider 
$route['dashboard/slider']='SliderController';
$route['dashboard/slider/tambah']='SliderController/tambah';
$route['slider/hapus/(:any)']='SliderController/hapus';
$route['slider/simpan']='SliderController/simpan';
$route['slider/update']='SliderController/update';
$route['dashboard/slider/edit/(:any)']='SliderController/edit';
// ENd Slider

// Manajemen 
$route['dashboard/manajemen']='ManajemenController';
$route['dashboard/manajemen/tambah']='ManajemenController/tambah';
$route['manajemen/hapus/(:any)']='ManajemenController/hapus';
$route['manajemen/simpan']='ManajemenController/simpan';
$route['manajemen/update']='ManajemenController/update';
$route['dashboard/manajemen/edit/(:any)']='ManajemenController/edit';
// ENd Manajemen

// Setting Web 
$route['dashboard/setting']='SettingController';
$route['dashboard/manajemen/tambah']='ManajemenController/tambah';
$route['manajemen/hapus/(:any)']='ManajemenController/hapus';
$route['manajemen/simpan']='ManajemenController/simpan';
$route['setting/update']='SettingController/update';
$route['dashboard/manajemen/edit/(:any)']='ManajemenController/edit';
// ENd Setting 



