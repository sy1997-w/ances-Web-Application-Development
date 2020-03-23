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


Route::resources([
    '/doctor' => 'DoctorController',
    '/patient' => 'PatientController',
    '/visit'=>'VisitController',
]);

Route::get('/doctor/create', 'DoctorController@create')->name('doctor.create');
Route::post('/doctor', 'DoctorController@store')->name('doctor.store');
Route::get('/doctor', 'DoctorController@index')->name('doctor.index');
Route::get('/doctor/{id}','DoctorController@show')->name('doctor.show');
Route::get('/doctor/{id}/edit','DoctorController@edit')->name('doctor.edit');
Route::put('/doctor/{id}','DoctorController@update')->name('doctor.update');

Route::resource('/doctor', 'DoctorController', ['except' => ['destroy',]]);
Route::resource('/doctor', 'DoctorController');
Route::get('doctor/delete/{doctor}',['as' => 'doctor.delete', 'uses' => 'DoctorController@destroy']);


Route::get('/patient/create', 'PatientController@create')->name('patient.create');
Route::post('/patient', 'PatientController@store')->name('patient.store');
Route::get('/patient', 'PatientController@index')->name('patient.index');
Route::get('/patient/{id}','PatientController@show')->name('patient.show');
Route::get('/patient/{id}/edit','PatientController@edit')->name('patient.edit');
Route::put('/patient/{id}','PatientController@update')->name('patient.update');

Route::resource('/patient', 'PatientController', ['except' => ['destroy',]]);
Route::resource('/patient', 'PatientController');
Route::get('patient/delete/{patient}',['as' => 'patient.delete', 'uses' => 'PatientController@destroy']);


Route::get('/visit/create', 'VisitController@create')->name('visit.create');
Route::post('/visit', 'VisitController@store')->name('visit.store');
Route::get('/visit', 'VisitController@index')->name('visit.index');
Route::get('/visit/{id}','VisitController@show')->name('visit.show');
Route::get('/visit/{id}/edit','VisitController@edit')->name('visit.edit');
Route::put('/visit/{id}','VisitController@update')->name('visit.update');

Route::resource('/visit', 'VisitController', ['except' => ['destroy',]]);
Route::resource('/visit', 'VisitController');
Route::get('visit/delete/{visit}',['as' => 'visit.delete', 'uses' => 'VisitController@destroy']);