<?php


use Illuminate\Support\Facades\Route;

Route::namespace('Shawwa\Contact\Http\Controllers')->group(function (){

    Route::get('contact','ContactController@index')->name('contact');
    Route::post('contact','ContactController@send');

});


