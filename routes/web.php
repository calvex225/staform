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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::resource('utilisateur', 'UtilisateursController');
    Route::resource('electrogene', 'GroupesElectrogeneController');
    Route::resource('maintenance', 'MaintenancesController');
    Route::resource('site', 'SitesController');
    Route::resource('sitetype', 'SiteTypesController');

    Route::get('tache/{maintenance}', 'TacheController@index')->name('tache.index');
    Route::get('tache/{maintenance}/create', 'TacheController@create')->name('tache.create');
    Route::post('tache', 'TacheController@store')->name('tache.store');
    
    Route::get('photo/{tache}', 'PhotosController@index')->name('photo.index');
    Route::get('photo/{tache}/create', 'PhotosController@create')->name('photo.create');
    Route::post('photo', 'PhotosController@store')->name('photo.store');

    Route::get('rapport', 'RapportsController@index')->name('rapport.index');
    Route::get('rapport/{maintenance}', 'RapportsController@show')->name('rapport.show');
    Route::get('rapport/{maintenance}/create', 'RapportsController@create')->name('rapport.create');
    Route::post('rapport', 'RapportsController@store')->name('rapport.store');
});
