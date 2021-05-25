<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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
    
Route::view('/','home'); // Route for 'home.blade.php' page.
Route::view('/about','about'); // Route for 'about.blade.php' page.
Route::view('/achivement', 'achivement'); // Route for 'achivement.blade.php' page.


