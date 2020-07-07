<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//register user as admin
Route::get('register-user','HomeController@registrationIndex');
Route::post('create-user-account','HomeController@createUserAccount');

// main controller
Route::get('dashboard', 'MainController@dashboard');
Route::get('admin/assign-privilege-index', 'MainController@AssignPrivilegeIndex');
Route::get('admin/assign-privilege-form', 'MainController@AssignPrivilegeForm');
Route::post('admin/assign-privilege', 'MainController@AssignPrivilege');
Route::post('admin/get-user-roles', 'MainController@getUserRoles')->name('get.user.roles');
Route::get('admin/user-accounts-index', 'MainController@UserAccountsIndex');
Route::post('admin/register-user', 'MainController@RegisterUser');
Route::post('update-comment','AdminController@UpdateComment');
Route::get('delete-comment/{id}','AdminController@deleteComment')->name('comment.delete');
Route::post('search-anything', 'AdminController@SearchAnything');
//Reset User Password Route Start
Route::get('admin/reset-password', 'MainController@resetPasswordIndex');
Route::post('reset-password', 'MainController@resetPassword');

//Change User Password
Route::get('change-password-index', 'MainController@changePasswordIndex');
Route::post('change-password', 'MainController@changePassword');

//userversity controller start
Route::get('admin/university-index','AdminController@UniversityIndex');
Route::post('/admin/save-university-details', 'AdminController@SaveUniversityDetails');
Route::get('/admin/university-contact-index','AdminController@ContactIndex');
Route::post('/admin/save-university-contact-details', 'AdminController@SaveUniversityContactDetails');
Route::post('/admin/update-university-contact-details','AdminController@UpdateUniversityContact');
Route::get('/admin/university-contact-delete/{id}','AdminController@DeleteContact')->name('university.contact.delete');
Route::post('/admin/update/university/details/{id}','AdminController@UpdateUniversityDetails')->name('admin.update.university.details');
Route::get('/admin/university-details-delete/{id}','AdminController@DeleteUniversityDetails')->name('delete.university.details');
Route::post('/admin/save-university-logo-details','AdminController@SaveUniversityLogo');
Route::get('announcement-index','AdminController@AnnouncementIndex')->name('announcement');
Route::get('create-announcement','AdminController@CreateAnnouncement')->name('create_announcement');
Route::post('store-announcement','AdminController@StoreAnnouncement')->name('announcement.store');
Route::get('edit-announcement-index/{id}','AdminController@EditAnnouncementIndex')->name('announcement.edit');
Route::get('delete-announcement-index/{id}','AdminController@DeleteAnnouncementIndex')->name('announcement.delete');
Route::post('patch-announcement','AdminController@PatchAnnouncement')->name('announcement.patch');
Route::post('update-attachment','AdminController@UpdateAttachment')->name('attachment.update');
Route::get('delete-announcement/{id}','AdminController@DeleteAnnouncement')->name('announcement.delete');
Route::get('company-page/{id}','AdminController@companyPage')->name('company.page');
Route::post('/comments','AdminController@postComment');
//university controller end
