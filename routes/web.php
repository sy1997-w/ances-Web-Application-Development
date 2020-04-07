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

<<<<<<< HEAD

Route::resource('/doctor', 'DoctorController', ['except' => ['destroy',]]);
Route::get('doctor/delete/{doctor}',['as' => 'doctor.delete', 'uses' => 'DoctorController@destroy']);


Route::resource('/patient', 'PatientController', ['except' => ['destroy',]]);
Route::get('patient/delete/{patient}',['as' => 'patient.delete', 'uses' => 'PatientController@destroy']);


=======
Route::resource('/doctor', 'DoctorController', ['except' => ['destroy',]]);
Route::get('doctor/delete/{doctor}',['as' => 'doctor.delete', 'uses' => 'DoctorController@destroy']);

Route::resource('/patient', 'PatientController', ['except' => ['destroy',]]);
Route::get('patient/delete/{patient}',['as' => 'patient.delete', 'uses' => 'PatientController@destroy']);

>>>>>>> cee4ecbc1fabe7348157b433c71d2f76622f0434
Route::resource('/visit', 'VisitController', ['except' => ['destroy',]]);
Route::get('visit/delete/{visit}',['as' => 'visit.delete', 'uses' => 'VisitController@destroy']);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('logout', function () {
        Auth::logout();
        return redirect('/login');
    });
});


Route::get('contactus', function(){
    return View('/details/contactus');
});
Route::get('ourtreatment', function(){
    return View('/details/ourtreatment');
});
Route::get('learnmore', function(){
    return View('/details/learnmore');
});

Route::get('smilegallery', 'ImageGalleryController@userindex');
Route::resource('/imagegallery', 'ImageGalleryController', ['except' => ['destroy',]]);
Route::get('imagegallery/delete/{id}', 'ImageGalleryController@destroy');
