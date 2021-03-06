<?php

use App\Jobs\SendEmailJop;
use App\Providers\TestEvent;


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

Route::get('/form/{lang?}', 'FormController@index')->name('form');
Route::post('/form', 'FormController@login');

Route::get('sendmail',function(){
	//SendEmailJop::dispatch();

	// delay sending
	SendEmailJop::dispatch()
                ->delay(now()->addSecond(5));

                // use command php artisan queue:work


	return "mail send success";
});


Route::get('event', function(){

	event(new TestEvent('hello'));
	
});

Route::get('sub',function(){
	if (Gate::allows('sub', Auth::user())) {
    // The current user can update the post...
		return view('sub');
	}else{
		return 'You need to subscripe';
	}
});