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

Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', 'AuthController@login')->name('login');
});

Route::get('/', 'DashboardController@index');
Route::resource('queues', 'QueueController');
Route::resource('polyclinic', 'PolyClinicController');

Route::resource('patients', 'PatientController');
Route::resource('visits', 'VisitController');
Route::resource('visits', 'VisitController');

Route::resource('medical-records', 'MedicalRecordController');
Route::get('/medical-records/history/{medical_record}', 'MedicalRecordController@showHistory')->name('medical-records.history');

Route::group(['prefix' => 'human-resources'], function () {
    Route::resource('doctors', 'DoctorController');

    Route::get('/nurses', 'HRController@nurse')->name('hr.nurses');
    Route::get('/staffs', 'HRController@staff')->name('hr.staffs');
    Route::get('/admins', 'HRController@admin')->name('hr.admins');
});

Route::group(['prefix' => 'pharmacies'], function () {
    Route::get('/drugs', 'PharmacyController@drug')->name('pharmacies.drugs');
    Route::get('/recipes', 'PharmacyController@recipe')->name('pharmacies.recipes');
});
