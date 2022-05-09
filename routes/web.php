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
Route::resource('medical_training', 'MedicalTrainingController');
Route::resource('tailoring_training', 'TailoringTrainingController');

Route::resource('job_enquiry', 'JobEnquiryController');
Route::resource('overseas_jobs', 'OverseasJobsController');
Route::resource('activities', 'ActivitiesController');

Route::resource('about', 'AboutController');
Route::get('md_message', 'AboutController@md_message')->name('md_message');
Route::get('who_we_are', 'AboutController@who_we_are')->name('who_we_are');
Route::resource('company_statement', 'CompanyStatementController');


// Kanji Japanese Language Training 
Route::resource('kanji_training', 'kanji\TrainingController');
Route::resource('kanji_about', 'kanji\KanjiAboutController');
Route::resource('kanji_activities', 'kanji\KanjiActivitiesController');
Route::resource('kanji_faq', 'kanji\KanjiFaqController');
Route::resource('kanji_news', 'kanji\KanjiNewsController');
Route::resource('kanji_contact', 'kanji\KanjiContactController');
