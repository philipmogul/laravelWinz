<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('bio/{dpage}', function ($dpage) {
    return $dpage.' Details will be built on this placeholder.';
});

// PROFILE PAGE ROUTE 
Route::get('/profile', function () {
    return view('profile', ['name' => 'Philip']);
});

// SETTINGS PAGE ROUTE
Route::get('/settings', function () {
    return view('settings', ['guest' => 'Philip']);
});

/*
FOR LARGER APPS, I WOULD CONSIDER MAKING A CONTROLLER FOR EACH ROUTE.
FOR EXAMPLE, A PROFILE CONTROLLER FOR THE PROFILE PAGE, AND A SETTINGS CONTROLLER FOR
THE SETTINGS PAGE. THIS WOULD HELP KEEP THE CODE ORGANIZED AND EASIER TO MANAGE.

IN CLI I WOULD TYPE 
php artisan make:controller ProfileController

IN THE PROFILE CONTROLLER I WOULD TYPE 
public function showProfile()
    {
        return view('welcome', ['name' => 'Philip']);
    }

// THEN I WOULD UPDATE THE ROUTE TO USE THE CONTROLLER
Route::get('/profile', [ProfileController::class, 'showProfile']);

*/





// POSSIBLE ROUTES FOR THE FUTURE
// ROUTES COMMUNICATE TO THE CONTROLLER / OPEN A VIEW. THE CONTROLLER COMMUNICATES TO THE MODEL AND VIEW.
// UNDERSTAND THE FLOW OF THE ROUTES, CONTROLLER, MODEL, AND VIEW, AND YOU WILL MASTER LARAVEL.

// REGISTER 

// LOGIN 

// LOGOUT

// HOME 

// CONTACT 

// SETTINGS 

