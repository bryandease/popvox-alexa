<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

AlexaRoute::intent('/request', 'GetLatestBills', function(){
    \Log::info('I got a request');
    return Alexa::say('The latest bill at POPVOX is house joint resolution 104 : Proposing an amendment to the Constitution of the United States to treat Puerto Rico as if it were a State for purposes of the election of the President and Vice President.  This bill is sponsored by Representative Steve Cohen of Tennessee\'s 9th district.');
});
