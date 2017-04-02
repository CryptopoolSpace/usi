<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));
Route::get('doctor', array('as' => 'read_doctors', 'uses' => 'DoctorController@show'));
Route::get('doctor/{id}', array('as' => 'read_doctor', 'uses' => 'DoctorController@get'));
Route::get('doctor/{id}/appointment', array('as' => 'read_doctor_appointments', 'uses' => 'DoctorController@getAppointments'));
Route::get('doctor/{id}/appointment/{appointment_id}', array('as' => 'read_doctor_appointment', 'uses' => 'DoctorController@getAppointment'));
Route::get('patient/{id}', array('as' => 'read_patient', 'uses' => 'PatientController@get'));
Route::get('patient/{id}/appointment', array('as' => 'read_patient_appointments', 'uses' => 'PatientController@getAppointments'));
Route::get('patient/{id}/appointment/{appointment_id}', array('as' => 'read_patient_appointment', 'uses' => 'PatientController@getAppointment'));
Route::get('patient', array('as' => 'read_patients', 'uses' => 'PatientController@show'));
Route::get('appointment', array('as' => 'read_appointments', 'uses' => 'AppointmentController@show'));
Route::get('appointment/{id}', array('as' => 'read_appointment', 'uses' => 'AppointmentController@get'));
Route::get('speciality', array('as' => 'read_speciality', 'uses' => 'SpecialityController@show'));
Route::get('speciality/{id}', array('as' => 'read_speciality', 'uses' => 'SpecialityController@get'));