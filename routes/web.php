<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index')->name('home');
Route::resource('contact', 'ContactController');
Route::resource('team', 'TeamController');
Route::resource('faq', 'FaqController');
Route::resource('training', 'TrainingController');
Route::resource('carrer_advice', 'CarrerAdviceController');
Route::resource('cv', 'UploadCvController');
Route::resource('partner', 'PartnerController');
Route::resource('language_training', 'LanguageTrainingController');
Route::resource('tailoring_training', 'TailoringTrainingController');
Route::resource('medical_training', 'MedicalTrainingController');


Route::resource('about', 'AboutController');
Route::get('md_message', 'AboutController@md_message')->name('md_message');
Route::get('who_we_are', 'AboutController@who_we_are')->name('who_we_are');
Route::get('why_choose', 'AboutController@why_choose')->name('why_choose');
