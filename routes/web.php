<?php

use Illuminate\Support\Facades\Route;

/******* NORMAL *******/
Route::get('/', function () {
    return view('home');
});

Route::get('/article-2', function () {
    return view('article-2');
});

Route::get('/article-3', function () {
    return view('article-3');
});


/******* 404 *******/

 /*
    This route is commented, so it does not exist
    Accessing it will give 404 error
*/
// Route::get('/article-1', function () {
//     return view('article-1');
// });


/******* 500 *******/

Route::get('/profile', function () {
    /*
        This will show my custom 500 page only even if APP_DEBUG in .env is set to true
        Laravel will not show its debug page
    */
    // abort(500);

    /*
        This will show my custom 500 page only if APP_DEBUG in .env is set to false
        Otherwise Laravel will output its debug page
    */
    throw new Exception('');

    return 'Profile';
});


