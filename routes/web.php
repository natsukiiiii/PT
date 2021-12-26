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
Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider')->where('social', 'twitter|facebook|google|line');
Route::get('/login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->where('social', 'twitter|facebook|google|line');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('posts', 'PostController');
Route::resource('goodPosts', 'GoodPostController');
Route::resource('users', 'UserController');
Route::resource('comments', 'CommentController');
Route::resource('questions', 'QuestionController');
Route::resource('questionsComments', 'QuestionsCommentController');



Route::resource('settings/profile', 'ProfileController');
// Route::get('settings/profile/edit', 'ProfileController@edit')->name('usersProfile.edit');
// Route::post('settings/profile/edit', 'ProfileController@update')->name('usersProfile.update');


// Route::post('settings/profile/{id}', 'ProfileController@store')->name('profile.id');

Route::resource('settings/experience', 'ExperienceController');
Route::resource('settings/education', 'EducationController');
Route::resource('settings/publication', 'PublicationController');
Route::resource('settings/socialevent', 'SocialEventController');


// それぞれのコントローラーを作り、indexで表示して
// 追加ボタン押下後、storeに処理を書いて、追加する。
// storeは新規保存。初期
// updateは更新。




// Route::get('settings/profile', 'SettingController@profile')->name('setting.profile');
// Route::patch('settings/profile/{user}', 'SettingController@update_information')->name('setting.update_information');

// Route::get('settings/experience', 'SettingController@experience')->name('setting.experience');
// Route::patch('settings/experience/{user}', 'SettingController@update_experience')->name('setting.update_experience');

// Route::get('settings/education', 'SettingController@education')->name('setting.education');
// Route::patch('settings/education/{user}', 'SettingController@update_education')->name('setting.update_education');

// Route::get('settings/publication', 'SettingController@publication')->name('setting.publication');
// Route::patch('settings/publication/{user}', 'SettingController@update_publication')->name('setting.update_publication');

// Route::get('settings/socialevent', 'SettingController@socialevent')->name('setting.socialevent');
// Route::patch('settings/socialevent/{user}', 'SettingController@update_socialevent')->name('setting.update_socialevent');




