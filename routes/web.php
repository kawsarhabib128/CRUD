<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//route for maincontenar
Route:: get('/','MaincontenarController@index')->name('admin.index');

//route for charts
Route:: get('/admin/chartjs','ChartsController@chartjs')->name('admin.chartjs');
Route:: get('/admin/flot','ChartsController@flot')->name('admin.flot');
Route:: get('/admin/inline','ChartsController@inline')->name('admin.inline');
Route:: get('/admin/uplot','ChartsController@uplot')->name('admin.uplot');

//route for FormsController
Route:: get('/admin/forms/general','FormsController@general')->name('admin.forms.general');
Route:: get('/admin/advanced','FormsController@advanced')->name('admin.advanced');
Route:: get('/admin/editors','FormsController@editors')->name('admin.editors');
Route:: get('/admin/validation','FormsController@validation')->name('admin.validation');

//route for CalendarController

Route:: get('/admin/widgets','CalendarController@widgets')->name('admin.widgets');
Route:: get('/admin/calendar','CalendarController@calendar')->name('admin.calendar');
Route:: get('/admin/gallery','CalendarController@gallery')->name('admin.gallery');
Route:: get('/admin/kanban','CalendarController@kanban')->name('admin.kanban');

//route for TablesController
Route:: get('/admin/data','TablesController@data')->name('admin.data');
Route:: get('/admin/simple','TablesController@simple')->name('admin.simple');
Route:: get('/admin/jsgrid','TablesController@jsgrid')->name('admin.jsgrid');

//route for UiController
Route:: get('/admin/ui/general','UiController@general')->name('admin.ui.general');
Route:: get('/admin/icons','UiController@icons')->name('admin.icons');
Route:: get('/admin/buttons','UiController@buttons')->name('admin.buttons');
Route:: get('/admin/sliders','UiController@sliders')->name('admin.sliders');
Route:: get('/admin/modals','UiController@modals')->name('admin.modals');
Route:: get('/admin/navbar','UiController@navbar')->name('admin.navbar');
Route:: get('/admin/timeline','UiController@timeline')->name('admin.timeline');
Route:: get('/admin/ribbons','UiController@ribbons')->name('admin.ribbons');

//route for MailboxController

Route:: get('/admin/mailbox','MailboxController@mailbox')->name('admin.mailbox');
Route:: get('/admin/compose','MailboxController@compose')->name('admin.compose');
Route:: get('/admin/read_mail','MailboxController@read_mail')->name('admin.read_mail');

//route for LayoutController

Route:: get('/admin/top_nav','LayoutController@top_nav')->name('admin.top_nav');
Route:: get('/admin/top_nav_sidebar','LayoutController@top_nav_sidebar')->name('admin.top_nav_sidebar');
Route:: get('/admin/boxed','LayoutController@boxed')->name('admin.boxed');
Route:: get('/admin/fixed_sidebar','LayoutController@fixed_sidebar')->name('admin.fixed_sidebar');
Route:: get('/admin/fixed_sidebar_custom','LayoutController@fixed_sidebar_custom')->name('admin.fixed_sidebar_custom');
Route:: get('/admin/fixed_topnav','LayoutController@fixed_topnav')->name('admin.fixed_topnav');
Route:: get('/admin/fixed_footer','LayoutController@fixed_footer')->name('admin.fixed_footer');
Route:: get('/admin/collapsed_sidebar','LayoutController@collapsed_sidebar')->name('admin.collapsed_sidebar');

//route for SearchController
Route:: get('/admin/simple','SearchController@simple')->name('admin.simple');
Route:: get('/admin/enhanced','SearchController@enhanced')->name('admin.enhanced');

//route for PagesController
Route:: get('/admin/invoice','PagesController@invoice')->name('admin.invoice');
Route:: get('/admin/profile','PagesController@profile')->name('admin.profile');
Route:: get('/admin/e_commerce','PagesController@e_commerce')->name('admin.e_commerce');
Route:: get('/admin/projects','PagesController@projects')->name('admin.projects');
Route:: get('/admin/project_add','PagesController@project_add')->name('admin.project_add');
Route:: get('/admin/project_edit','PagesController@project_edit')->name('admin.project_edit');
Route:: get('/admin/project_detail','PagesController@project_detail')->name('admin.project_detail');
Route:: get('/admin/contacts','PagesController@contacts')->name('admin.contacts');
Route:: get('/admin/faq','PagesController@faq')->name('admin.faq');
Route:: get('/admin/contact_us','PagesController@contact_us')->name('admin.contact_us');


//route for ExtrasController

Route:: get('/admin/error404','ExtrasController@error404')->name('admin.error404');
Route:: get('/admin/lockscreen','ExtrasController@lockscreen')->name('admin.lockscreen');
Route:: get('/admin/legacy_user_menu','ExtrasController@legacy_user_menu')->name('admin.legacy_user_menu');

//route for ProductsController

Route:: get('/admin/products','ProductController@index')->name('product.index');
Route:: get('/admin/products/create','ProductController@create')->name('product.create');
Route:: post('/admin/products/store','ProductController@store')->name('product.store');
Route:: get('/admin/products/show','ProductController@show')->name('product.show');
Route:: get('/admin/products/edit','ProductController@edit')->name('product.edit');






