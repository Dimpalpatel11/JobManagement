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
Route::post('/submitJobsubmission', 'JobController@submitJobsubmission')->name('submitJobsubmission');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => ['web']], function(){
Route::get('/editjob/{id}', 'JobController@editjob')->name('editJob');
Route::post('/editJobsubmission', 'JobController@editJobsubmission')->name('editJobsubmission');
Route::get('/Viewjob/{id}', 'JobController@Viewjob')->name('viewJob');
Route::get('/deletejob/{id}', 'JobController@deletejob')->name('deleteJob');
  Route::group(['prefix' => 'admin' , 'middleware' => ['role:admin']], function(){
      Route::get('/dashboard', 'HomeController@adminindex');
  });

});
