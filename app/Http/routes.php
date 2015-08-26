<?php



Route::get('/', function () {
    return view('pages.home');
});

#Route for flyers.
Route::resource('flyers', 'FlyersController');