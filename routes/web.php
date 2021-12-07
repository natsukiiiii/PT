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
Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider')->where('social', 'twitter|facebook|google');
Route::get('/login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->where('social', 'twitter|facebook|google');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('posts', 'PostController');
Route::resource('users', 'UserController');

Route::get('settings/profile', 'SettingController@profile')->name('setting.profile');
Route::patch('settings/profile/{user}', 'SettingController@update_information')->name('setting.update_information');

Route::get('settings/experience', 'SettingController@experience')->name('setting.experience');
Route::patch('settings/experience/{user}', 'SettingController@update_experience')->name('setting.update_experience');

Route::get('settings/education', 'SettingController@education')->name('setting.education');
Route::patch('settings/education/{user}', 'SettingController@update_education')->name('setting.update_education');

Route::get('settings/publication', 'SettingController@publication')->name('setting.publication');
Route::patch('settings/publication/{user}', 'SettingController@update_publication')->name('setting.update_publication');



