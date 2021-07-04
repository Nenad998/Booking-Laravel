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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile/{user}','UserController@profile');
Route::get('reservations_users', 'UserController@users_reservations');

Route::get('/search', function (){
})->name('search');

Route::get('/reservation/{id}', 'HouseController@reservation')->name('reservation');
Route::post('/reservation_post/{room_id}', 'HouseController@reservation_post')->middleware('auth');
Route::get('/', 'HouseController@all');
Route::get('/contact', 'HouseController@contact')->name('contact');
Route::get('/about_us', 'HouseController@about_us')->name('about_us');
Route::get('/house/single/{id}','HouseController@single')->name('house.single');
Route::get('/room/single/{id}', 'HouseController@single_room')->name('room.single');


Route::get('/admin', 'AdminController@index')->middleware(['auth','admin']);
Route::get('/house/add', 'AdminController@add')->middleware(['auth','admin']);
Route::post('/house/store','AdminController@store')->middleware(['auth','admin']);
Route::get('/single_house/{id}','AdminController@single')->name('admin.single_house')->middleware(['auth','admin']);
Route::get('/add_room/{house}', 'AdminController@add_room')->middleware(['auth','admin']);
Route::post('/add_room_post/{house_id}', 'AdminController@store_room')->middleware(['auth','admin']);
Route::get('single_room/{id}', 'AdminController@single_room')->name('admin.single_room')->middleware(['auth','admin']);
Route::get('edit_house/{id}', 'AdminController@edit_house_view')->name('admin.edit_house')->middleware(['auth','admin']);
Route::post('store_edit/{id}', 'AdminController@edit_house')->name('admin.store_edit')->middleware(['auth','admin']);
Route::get('delete_house/{id}', 'AdminController@delete_house')->name('admin.delete_house')->middleware(['auth','admin']);
Route::get('edit_room/{id}', 'AdminController@edit_room_view')->name('admin.edit_room')->middleware(['auth','admin']);
Route::post('edit_room_post/{house_id}', 'AdminController@edit_room')->name('admin.edit_room_post')->middleware(['auth','admin']);
Route::get('delete_room/{id}', 'AdminController@delete_room')->name('admin.delete_room')->middleware(['auth','admin']);
Route::get('/all_reservations', 'AdminController@admin_reservations')->name('all_reservations')->middleware(['auth','admin']);

//Route::get('/reset_password', 'AdminController@reset_pass')->middleware(['auth','admin']);


