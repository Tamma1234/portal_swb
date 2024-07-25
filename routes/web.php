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
Route::get('/', 'AuthController@index')->name('home');
//Route::get('/login', 'AuthController@index')->name('login');
Route::post('/login', 'AuthController@login')->name('login.post');
Route::get('/logout', 'AuthController@logout')->name('logout.index');
Route::get('/redirect', 'SocialController@redirect')->name('login.redirect');
Route::get('/callback/google', 'SocialController@callback');


Route::middleware('auth')->group(function () {
    Route::get('/admin', 'DashboardController@index')->name('dashboard');
    Route::group(['prefix' => 'students'], function () {
        Route::get('index', 'DashboardController@listGroup')->name('student.index');
        Route::get('profile', 'DashboardController@profile')->name('student.profile');
        Route::get('profile-2', 'DashboardController@profileDetail')->name('student.profile-2');
        Route::get('profile-1', 'DashboardController@profileUpload')->name('student.profile-1');
        Route::get('profile-3', 'DashboardController@profile3')->name('student.profile-3');
        Route::post('/uploads', 'DashboardController@uploadDrive')->name('upload.drive');
        Route::get('/gold', 'DashboardController@goldList')->name('gold.list');

        Route::get('grade', 'ResultController@listGrade')->name('student.grade');
    });

    Route::group(['prefix' => 'notifications'], function () {
        Route::get('index', 'NotificationController@index')->name('notification.index');
        Route::get('detail/{id}', 'NotificationController@detailNotification')->name('notification.detail');
        Route::get('academic', 'NotificationController@getAcademic')->name('student.academic');
        Route::get('activities', 'NotificationController@getActivities')->name('student.activities');
        Route::get('fees', 'NotificationController@getFees')->name('student.fees');
    });

    Route::group(['prefix' => 'calendar'], function () {
        Route::get('schedule', 'DashboardController@listSchedule')->name('student.schedule');
        Route::get('getSchedule', 'DashboardController@schedule')->name('student.list');
        Route::get('attendance-report', 'DashboardController@getAttendance')->name('student.attendance');
    });

    Route::group(['prefix' => 'clubs'], function () {
        Route::get('/', 'ClubController@index')->name('clubs.index');
        Route::get('/register', 'ClubController@Register')->name('clubs.register');
        Route::get('/detail/{id}', 'ClubController@detail')->name('club.detail');
        Route::post('/leave-club/{id}', 'ClubController@leaveClub')->name('active.leave');
        Route::get('/remove-member/{id}', 'ClubController@delete')->name('club.remove');
        Route::get('/accept/{id}', 'ClubController@acceptMember')->name('club.accept');
        Route::get('/delete/{id?}', 'ClubController@deleteClub')->name('delete.club');
        Route::post('/store-register', 'ClubController@storeRegister')->name('clubs.store');
    });

    Route::group(['prefix' => 'queries'], function () {
        Route::get('/index', 'QueryController@index')->name('queries.index');
        Route::post('send-queries', 'QueryController@sendQueries')->name('queries.send');
        Route::get('detail-query/{id}', 'QueryController@detailQuery')->name('queries.detail');
        Route::post('update-query/{id}', 'QueryController@queryUpdate')->name('queries.update');
        Route::get('history-query', 'QueryController@getHistoryQuery')->name('queries.history');
    });

    Route::group(['prefix' => 'survey'], function () {
        Route::get('/index', 'SurveyController@index')->name('survey.index');
        Route::get('/detail/{id}', 'SurveyController@detail')->name('survey.detail');
        Route::post('/store/{id}', 'SurveyController@store')->name('survey.store');
        Route::get('/responses', 'SurveyController@responses')->name('survey.responses');
    });
//    // Route phần users
//    Route::group(['prefix' => 'users'], function () {
//        Route::get('/', 'UserController@index')->name('users.index');
//        Route::get('/search', 'UserController@search')->name('users.search');
//        Route::post('/post-search', 'UserController@postSearch')->name('users.post.search');
//        Route::get('create', 'UserController@create')->name('users.create');
//        Route::post('store', 'UserController@store')->name('users.store');
//        Route::get('edit/{id}', 'UserController@edit')->name('users.edit');
//        Route::post('update/{id}', 'UserController@update')->name('users.update');
//        // Cancel account
//
//        Route::get('remove/{id}', 'UserController@delete')->name('users.remove');
//        // List user delete
//        Route::get('user-trashout', 'UserController@userTrashOut')->name('users.trash');
//        // Delete user completely
//        Route::get('delete-completely/{id}', 'UserController@deleteCompletely')->name('users.delete.completely');
//    });
//
//    Route::group(['prefix' => 'room'], function () {
//        Route::get('index', 'RoomController@index')->name('rooms.index');
//        Route::get('search', 'RoomController@searchDate')->name('rooms.search');
//        Route::post('add-room/{id?}', 'RoomController@addRooms')->name('rooms.add');
//        Route::get('active-room/{id}', 'RoomController@activeRooms')->name('rooms.active');
//        Route::get('update-room/{id}', 'RoomController@updateRooms')->name('rooms.update');
//        Route::get('cancel-room/{id}', 'RoomController@cancelRooms')->name('rooms.cancel');
//        Route::post('store-room/{id}', 'RoomController@storeCancel')->name('rooms.store.cancel');
//    });

    //Route Items
    Route::group(['prefix' => 'items'], function () {
        Route::get('index', 'ItemController@index')->name('items.index');
        Route::get('detail/{id}', 'ItemController@detail')->name('items.detail');
        Route::get('update', 'ItemController@update')->name('items.update');
        Route::post('order/{id}', 'ItemController@orders')->name('items.order');
        Route::post('store-event/{id}', 'ItemController@storeEvent')->name('store.event');
        Route::get('bill-list', 'ItemController@billList')->name('items.bill');
        Route::get('promotion', 'ItemController@promotion')->name('items.promotion');
    });
    //Parent
    Route::group(['prefix' => 'parent'], function () {
        Route::get('parent', 'ParentController@getParent')->name('parent.index');
        Route::post('store', 'ParentController@store')->name('parent.store');
        Route::post('setting-update', 'ParentController@setingUpdate')->name('setting.store');
    });
});
