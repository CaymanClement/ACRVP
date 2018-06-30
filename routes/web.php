<?php

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

Route::get('/', 'NoAuthController@index')->name('home');

Route::get('/home', 'NoAuthController@index');

Route::get('/about', function () {
    return view('about');});

Route::get('/page-not-found', function () {
    return view('errors.route');
});

Route::get('/something-went-wrong', function () {
    return view('errors.erroracrvp');
});

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');


// Graduant Role
Route::group(['middleware' => 'graduate'], function () {
Route::get('/upload', 'HomeController@upload_certificate');
Route::get('/certificates', 'HomeController@search_records');
Route::post('/search_records', 'HomeController@search_certificate');
Route::get('/messages', 'HomeController@messages');
});


//admin role
Route::group(['middleware' => 'admin'], function () {
Route::get('/admin', 'Admin\AdminController@index')->name('admin');
Route::get('/admin/certificates', 'Admin\AdminController@certificates');
Route::get('/admin/create_user', 'Admin\AdminController@create_user');
Route::post('/admin/add_user', 'Admin\AdminController@add_user');
Route::get('/admin/users', 'Admin\AdminController@system_users');
Route::get('/admin/payment', 'Admin\AdminController@payments');
Route::post('/admin/pay', 'Admin\AdminController@pay');
Route::get('/admin/verify{id}pay', 'Admin\AdminController@verify_pay');
Route::get('/admin/unverify{id}pay', 'Admin\AdminController@unverify_pay');
Route::get('/admin/announcements', 'Admin\AdminController@announcements');
Route::get('/admin/messages', 'Admin\AdminController@messages');
Route::get('/admin/profile', 'Admin\AdminController@profile');
Route::get('/admin/searches', 'Admin\AdminController@search_records');
Route::get('/admin/block{id}user', 'Admin\AdminController@block');
Route::get('/admin/unblock{id}user', 'Admin\AdminController@unblock');
Route::get('/admin/block{id}inst', 'Admin\AdminController@block_inst');
Route::get('/admin/unblock{id}inst', 'Admin\AdminController@unblock_inst');
Route::get('/admin/institutions', 'Admin\AdminController@institutions');
Route::post('/admin/reg_inst', 'Admin\AdminController@reg_inst');
Route::get('/admin/delete{id}', 'Admin\AdminController@delete');
});

Route::post('/send_message', 'HomeController@send_messages');
Route::get('/sent_messages', 'HomeController@sent_messages');
Route::get('/{id}view_message', 'HomeController@view_message');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/payment', 'HomeController@payments');
Route::get('/certificates/view_cert/{id}', 'HomeController@view_cert')->name('view_cert');
Route::post('/admin/create_announcement', 'Admin\AdminController@create_announcement');
Route::get('/delete_ann/{id}', 'Admin\AdminController@delete_ann');
Route::get('/admin/{id}view_slip', 'Admin\AdminController@view_pay');
Route::post('/about/contact-us', 'NoAuthController@contactUSPost'); 
Route::post('/change{id}password', 'Admin\AdminController@change_password');

Route::get('/set-new-password/{token}', 'Auth\ForgotPasswordController@enter_pass');

//Organisation role
Route::group(['middleware' => 'organization'], function () {
Route::get('/organization/home', 'Organisation\OrgController@index')->name('organization');
Route::get('/organization/certificates', 'Organisation\OrgController@certificates');
Route::get('/organization/users', 'Organisation\OrgController@system_users');
Route::get('/organization/payment', 'Organisation\OrgController@payments');
Route::get('/organization/messages', 'Organisation\OrgController@messages');
Route::get('/organization/profile', 'Organisation\OrgController@profile');
Route::post('/organization/pay', 'Admin\AdminController@org_pay');
});
//Official role
Route::group(['middleware' => 'official'], function () {
Route::get('/official/home', 'Official\OfficialController@index')->name('official');
Route::get('/official/certificates', 'Official\OfficialController@certificates');
Route::get('/official/users', 'Official\OfficialController@system_users');
Route::get('/official/announcements', 'Official\OfficialController@announcements');
Route::get('/official/messages', 'Official\OfficialController@messages');
Route::get('/official/profile', 'Official\OfficialController@profile'); 
Route::get('/official/certificates/fake/{id}', 'Official\OfficialController@fake');
Route::get('/official/certificates/verify/{id}', 'Official\OfficialController@verify');
Route::get('/official/upload', 'Official\OfficialController@upload');
Route::get('/official/delete{id}', 'Official\OfficialController@delete');
Route::post('/upload/up', 'HomeController@upload');

Route::get('/official/mark{id}', 'Official\OfficialController@mark_collected');
Route::get('/official/unmark{id}', 'Official\OfficialController@unmark_collected');
});
