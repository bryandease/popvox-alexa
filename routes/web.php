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

AlexaRoute::intent('/request', 'GetLatestBill', function(){
    return Alexa::say('The latest bill at POPVOX is house joint resolution 104 : Proposing an amendment to the Constitution of the United States to treat Puerto Rico as if it were a State for purposes of the election of the President and Vice President.  This bill is sponsored by Representative Steve Cohen of Tennessee\'s 9th district.');
});

AlexaRoute::intent('/request', 'GetBillSentiment', function(){
    return Alexa::say('38 percent of people oppose this bill and 62 percent of people support this bill');
});
