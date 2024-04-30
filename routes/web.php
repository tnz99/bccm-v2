<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdUserController;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'login'] );
Route::post('/', [AuthController::class, 'auth_login'] );

Route::get('logout', [AuthController::class, 'logout']);

Route::get('/auth/forgot', [AuthController::class, 'forgot']);
Route::get('forgot_post', [AuthController::class, 'forgot_post']);


Route::group(['middleware' => 'useradmin'], function( ) {

    Route::get('panel/dashboard', [DashboardController::class, 'dashboard'] );

    Route::get('panel/role', [RoleController::class, 'list'] );
    Route::get('panel/role/add', [RoleController::class, 'add'] );
    Route::post('panel/role/add', [RoleController::class, 'insert'] );
    Route::get('panel/role/edit/{id}', [RoleController::class, 'edit'] );
    Route::post('panel/role/edit/{id}', [RoleController::class, 'update'] );
    Route::get('panel/role/delete/{id}', [RoleController::class, 'delete'] );


    Route::get('panel/aduser', [AdUserController::class, 'list']);
    Route::get('panel/aduser/add', [AdUserController::class, 'add'] );
    Route::post('panel/aduser/add', [AdUserController::class, 'insert'] );
    Route::get('panel/aduser/edit/{id}', [AdUserController::class, 'edit'] );
    Route::post('panel/aduser/edit/{id}', [AdUserController::class, 'update'] );
    Route::get('panel/aduser/delete/{id}', [AdUserController::class, 'delete'] );


});
















