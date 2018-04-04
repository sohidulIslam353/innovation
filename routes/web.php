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
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','FrontController@index')->name('/');
Route::get('/our-team','FrontController@our_team')->name('our.team');
Route::get('/all-courses','FrontController@all_course')->name('all.course');
Route::get('/blog','FrontController@blog')->name('blog');
Route::get('/contact-us','FrontController@contact_us')->name('contact.us');








Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('password-change','HomeController@')->name('password.change');

//admin all crud operation are start here

Route::get('/add-category','CategoryController@index')->name('add.category');
Route::post('/insert-category','CategoryController@add_category')->name('insert.category');