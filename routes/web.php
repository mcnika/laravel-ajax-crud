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

Route::middleware(['auth'])->group(function () {

	Route::get('/', function(){
		return redirect()->route('contacts.index');
	});

	Route::prefix('dashboard')->group(function(){
	    Route::get('contacts', 'ContactController@index')->name('contacts.index'); 
	    Route::post('contacts', 'ContactController@store')->name('contacts.store'); 
	    Route::get('contacts/{contact}/edit', 'ContactController@edit')->name('contacts.edit')->middleware('can:view,contact');  
	    Route::put('contacts/{contact}', 'ContactController@update')->name('contacts.update')->middleware('can:update,contact');
	    Route::delete('contacts/{contact}', 'ContactController@destroy')->name('contacts.destroy')->middleware('can:delete,contact');
	});
});	