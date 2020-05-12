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
    return view('index');
});
Route::get('/admin/home', function () {
    return view('admin.admin-home');
});

Route::get('history','PagesController@history');
Route::get('services','PagesController@services');
Route::get('about','PagesController@about');
Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);

Route::get('events','EventController@event');
Route::post('events/submit','EventController@submitEvent');
Route::get('events','EventController@getAllEvent');
Route::get('events/viewEvents/{id}','EventController@viewEvent');
// Route::get('events/editEvents/{id}','EventController@editEvent');
// Route::put('/events/update/{id}', 'EventController@updateEvent');
//Route::get('/events/delete/{id}', 'EventController@deleteEvent')->name('event.delete');
// Prayer Request
Route::get('prayer-request','PrayerController@index');
Route::post('prayer-request', ['as'=>'prayer.store','uses'=>'PrayerController@PrayerPost']);

//Admin route
// Route::get('/admin/events');
//
Route::get('admin/events','AdminController@getadminEvents');
Route::get('admin/create','AdminController@createEventAdmin');
Route::post('admin/create','AdminController@submitEventAdmin');
Route::get('admin/editEvents/{id}','AdminController@editEvent');
Route::put('admin/update/{id}','AdminController@updateEvent');
Route::get('admin/delete/{id}','AdminController@deleteEvent')->name('event.delete');
//contactUS
Route::get('admin/contact-us','AdminController@getAllContact');
Route::get('admin/contact-us/delete/{id}','AdminController@deleteContact')->name('contact.delete');
Route::get('admin/prayer-request','AdminController@getallPrayerRequest');
Route::get('admin/delete/prayer-request/{id}','AdminController@deletePrayerRequest')->name('request.delete');
//login
// get return view
// post submit data
// put/patch update data
// delete/destroy delete data

Auth::routes();
// Route::get('admin/login','Auth\LoginConroller@showLoginForm')-name('login');
// Admin Auth RouteServiceProvider
// Route::get('admin/login','Auth\LoginConroller@showLoginForm')-name('login');
// Route::get('/home', 'HomeController@index')->name('home');
