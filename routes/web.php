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
    return Alexa::say('Why was the little boy crying? Because he had a frog stapled to his face!');
});
