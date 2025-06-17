<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return 'About Details will be built on this placeholder.';
});

Route::get('dynamicpage/{dpage}', function ($dpage) {
    return $dpage.' Details will be built on this placeholder.';
});

// POSSIBLE ROUTES FOR THE FUTURE
// ROUTES COMMUNICATE TO THE CONTROLLER. THE CONTROLLER COMMUNICATES TO THE MODEL AND VIEW.
// UNDERSTAND THE FLOW OF THE ROUTES, CONTROLLER, MODEL, AND VIEW, AND YOU WILL MASTER LARAVEL.

// REGISTER 

// LOGIN 

// LOGOUT


// HOME 
