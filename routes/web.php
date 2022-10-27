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

Route::get('/', 'HomeController@index')->name('home');
//Route::get('/login', 'AuthController@index')->name('login');
Route::post('/login', 'AuthController@login')->name('login.post');
Route::get('/logout', 'AuthController@logout')->name('logout.index');
Route::get('/redirect', 'SocialController@redirect')->name('login.redirect');
Route::get('/callback/google', 'SocialController@callback');


Route::middleware('auth')->group(function () {
    Route::get('/admin', 'DashboardController@index')->name('dashboard');

    Route::group(['prefix' => 'students'], function () {
        Route::get('index', 'DashboardController@listGroup')->name('student.index');
        Route::get('academic', 'DashboardController@getAcademic')->name('student.academic');
        Route::get('activities', 'DashboardController@getActivities')->name('student.activities');
        Route::get('fees', 'DashboardController@getFees')->name('student.fees');
    });

    Route::group(['prefix' => 'calendar'], function () {
        Route::get('schedule', 'DashboardController@listSchedule')->name('student.schedule');
    });
    // Route phần users
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'UserController@index')->name('users.index');
        Route::get('/search', 'UserController@search')->name('users.search');
        Route::post('/post-search', 'UserController@postSearch')->name('users.post.search');
        Route::get('create', 'UserController@create')->name('users.create');
        Route::post('store', 'UserController@store')->name('users.store');
        Route::get('edit/{id}', 'UserController@edit')->name('users.edit');
        Route::post('update/{id}', 'UserController@update')->name('users.update');
        // Cancel account

        Route::get('remove/{id}', 'UserController@delete')->name('users.remove');
        // List user delete
        Route::get('user-trashout', 'UserController@userTrashOut')->name('users.trash');
        // Delete user completely
        Route::get('delete-completely/{id}', 'UserController@deleteCompletely')->name('users.delete.completely');
    });

    Route::group(['prefix' => 'room'], function () {
        Route::get('index', 'RoomController@index')->name('rooms.index');
        Route::get('search', 'RoomController@searchDate')->name('rooms.search');
        Route::post('add-room/{id?}', 'RoomController@addRooms')->name('rooms.add');
        Route::get('active-room/{id}', 'RoomController@activeRooms')->name('rooms.active');
        Route::get('update-room/{id}', 'RoomController@updateRooms')->name('rooms.update');
        Route::get('cancel-room/{id}', 'RoomController@cancelRooms')->name('rooms.cancel');
        Route::post('store-room/{id}', 'RoomController@storeCancel')->name('rooms.store.cancel');
    });
});
