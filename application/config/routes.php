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

// auth
$route['default_controller'] = 'auth/auth/index';
$route['logout'] = 'auth/logout';

// dashboard
$route['dashboard'] = 'dashboard/index';
$route['pemberitahuan'] = 'dashboard/notif';

//PENGAJUAN
$route['data-pengajuan'] = 'pengajuan/index';
$route['add-pengajuan'] = 'pengajuan/add_pengajuan';
$route['tambah-pengajuan'] = 'pengajuan/tambah_pengajuan';
$route['add-alat-pengajuan'] = 'pengajuan/tambah_alat';
$route['add-pengajuan-alat'] = 'pengajuan/pengajuan_alat';
$route['add-pengajuan-lab'] = 'pengajuan/pengajuan_lab';
$route['add-lab-pengajuan'] = 'pengajuan/lab_pengajuan';
$route['delete-pengajuan/(:any)'] = 'pengajuan/delete_pengajuan/$1';
$route['delete-pengajuan-lab/(:any)'] = 'pengajuan/delete_pengajuan_lab/$1';
$route['delete-dokumen/(:any)'] = 'pengajuan/delete_dokumen/$1';
$route['edit-pengajuan'] = 'pengajuan/edit_pengajuan';
$route['update-status-pengajuan'] = 'pengajuan/update_status';
$route['cancel-pengajuan'] = 'pengajuan/cancel_pengajuan';
$route['riwayat-pembatalan'] = 'pengajuan/riwayat_pembatalan';
$route['upload-file'] = 'pengajuan/upload_file';
$route['pengajuan-selesai'] = 'pengajuan/pengajuan_selesai';
$route['detail-pengajuan/(:any)'] = 'pengajuan/detail_pengajuan/$1';
$route['riwayat-aktifitas-pengajuan/(:any)'] = 'pengajuan/riwayat_aktifitas/$1';
//alat
$route['data-alat'] = 'alat/index';
$route['data-semua-alat'] = 'alat/semua_alat';
$route['add-alat'] = 'alat/add_alat';
$route['delete-alat/(:any)'] = 'alat/delete_alat/$1';
$route['edit-alat'] = 'alat/edit_alat';
$route['update-alat'] = 'alat/update_alat';
$route['data-divisi'] = 'alat/daftar_divisi';
$route['data-alat-divisi/(:any)'] = 'alat/daftar_alat_divisi/$1';
$route['data-kondisi-alat/(:any)'] = 'alat/daftar_kondisi_alat/$1';
$route['data-kondisi'] = 'alat/daftar_kondisi';


//user
$route['data-user'] = 'user/index';
$route['add-user'] = 'user/add_user';
$route['delete-user/(:any)'] = 'user/delete_user/$1';
$route['edit-user'] = 'user/edit_user';
//user
$route['data-status'] = 'status/index';
$route['add-status'] = 'status/add_status';
$route['delete-status/(:any)'] = 'status/delete_status/$1';
$route['edit-status'] = 'status/edit_status';

//profile
$route['edit-profile'] = 'profile/edit_profile';

//divisi
// $route['data-divisi'] = 'divisi/index';
// $route['add-divisi'] = 'divisi/add_divisi';
// $route['delete-divisi/(:any)'] = 'divisi/delete_divisi/$1';
// $route['edit-divisi'] = 'divisi/edit_divisi';

//kondisi
// $route['data-kondisi'] = 'kondisi/index';
// $route['add-kondisi'] = 'kondisi/add_kondisi';
// $route['delete-kondisi/(:any)'] = 'kondisi/delete_kondisi/$1';
// $route['edit-kondisi'] = 'kondisi/edit_kondisi';
//type
$route['data-type'] = 'tipe/index';
$route['add-type'] = 'tipe/add_type';
$route['delete-type/(:any)'] = 'tipe/delete_type/$1';
$route['edit-type'] = 'tipe/edit_type';
//lab
$route['data-lab'] = 'lab/index';
$route['add-lab'] = 'lab/add_lab';
$route['delete-lab/(:any)'] = 'lab/delete_lab/$1';
$route['edit-lab'] = 'lab/edit_lab';

//system
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
