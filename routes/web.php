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
    Route::post('/login', 'AuthController@authentication')->name('auth.login');
    Route::get('/logout', 'AuthController@logout')->name('auth.logout');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@index');
    Route::resource('polyclinic', 'PolyClinicController');
    Route::resource('queues', 'QueueController');
    Route::resource('patients', 'PatientController');
    Route::resource('visits', 'VisitController');

    Route::resource('medical-records', 'MedicalRecordController');
    Route::get('/medical-records/history/{medical_record}', 'MedicalRecordController@showHistory')->name('medical-records.history');

    Route::group(['prefix' => 'human-resources'], function () {
        Route::get('/{link}', 'HumanResourcesController@index')->name('hr.index');
        Route::get('/{link}/create', 'HumanResourcesController@create')->name('hr.create');
        Route::post('/{link}/store', 'HumanResourcesController@store')->name('hr.store');
        Route::get('/{link}/edit/{user?}', 'HumanResourcesController@edit')->name('hr.edit');
        Route::put('/{link}/update/{user?}', 'HumanResourcesController@update')->name('hr.update');
        Route::delete('/{link}/destroy/{user?}', 'HumanResourcesController@destroy')->name('hr.destroy');
    });

    Route::group(['prefix' => 'pharmacies'], function () {
        Route::resource('drugs', 'DrugController');
        Route::resource('prescriptions', 'PrescriptionController');
    });
});
