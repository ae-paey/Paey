<?php
use Illuminate\Auth\Middleware\Authenticate;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// FrontEnd
Route::get('/', 'WelcomeController@index')->name('index');
Route::post('/contact', 'WelcomeController@contact')->name('contact.form');
// Route::get('/email', function() {
//   return view('emails.template');
// });

// Authentication
Route::get('login/github', 'Auth\OAuthController@redirectToGitHub')->name('github');
Route::get('login/github/callback', 'Auth\OAuthController@handleGitHubCallback');
Route::get('login/google', 'Auth\OAuthController@redirectToGoogle')->name('google');
Route::get('login/google/callback', 'Auth\OAuthController@handleGoogleCallback');
Auth::routes(['verify' => true]);

// Dashboard
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::group(['middleware' => ['auth','verified']], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
  Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
  Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
  Route::get('profile/company', 'CompanyController@company')->name('company.edit');
  Route::put('profile/company', 'CompanyController@updateCompany')->name('company.update');
  Route::get('profile/account', 'CompanyController@account')->name('account.edit');
  Route::post('profile/account', 'CompanyController@updateAccount')->name('account.update');
});

