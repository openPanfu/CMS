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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/settings', 'HomeController@settings')->name('settings');
Route::post('/settings', 'HomeController@newSettings')->name('newSettings');

use App\User;

Route::get('/play', function () {
	// Is the user logged in on the website?
	if(Auth::Check()) {
		// We get the user from the database.
		$user_id = Auth::user()->id;
		$current_user = User::find($user_id);

		// We generate a new ticket_id for the user.
		$newTicketId = uniqid("OPS_");
		$current_user->ticket_id = $newTicketId;

		// We store this new ticket in the databse and local auth.
		$current_user->save();
		Auth::user()->ticket_id = $newTicketId;
	}
   return view('play');
})->name('play');
