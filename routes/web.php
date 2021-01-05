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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::group(['middleware' => 'admin'], function() {
       Route::resource('/admin', 'AdminController');
       Route::get('/view_users', 'AdminController@view_users');
       Route::get('/view_records', 'AdminController@view_records');
       Route::get('/view_faculties', 'AdminController@view_faculties');
       Route::get('/universities', 'AdminController@universities');
       Route::get('/view_courses', 'AdminController@view_courses');
       Route::get('/view_universities', 'AdminController@universities');
       Route::get('/view_results', 'AdminController@view_results');
       Route::get('/roles', 'AdminController@roles');
    //    Route::get('/admin/{user}', 'AdminController@edit');
});
Route::group(['middleware' => 'university'], function() {
    Route::resource('/university_admin', 'UniversityAdminController');
    Route::get('/upload_results','UniversityAdminController@upload_results');
    Route::post('/post_results','UniversityAdminController@post_excel_records');
    Route::get('/view_records', 'UniversityAdminController@view_records');

});
Route::group(['middleware' => 'auth'], function() {
Route::resource('/users','HomeController');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
