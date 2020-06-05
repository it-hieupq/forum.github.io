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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('discussions', 'DiscussionController');

Route::resource('discussions/{discussion}/replies', 'ReplyController');

Route::post('discussions/{discussion}/replies/{reply}/mark-as-best','DiscussionController@markAsBest')->name('mark-as-best');

Route::get('user/notifications', 'UserController@notifications')->name('user.notifications');
