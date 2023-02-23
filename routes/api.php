<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('/insects', 'App\Http\Controllers\InsectsController', [
    'except' => ['edit', 'show', 'create']
]);

Route::resource('/webvitals', 'App\Http\Controllers\WebvitalsController');
