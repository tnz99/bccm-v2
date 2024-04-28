<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\ClimateController;
use App\Http\Controllers\EditClimateController;


Route::get('/dashboard',[DashboardController::class, 'dashboard']);
Route::get('/story',[StoryController::class, 'story']);
Route::get('/climate',[ClimateController::class, 'climate']);
Route::get('/edit-climate',[EditClimateController::class, 'editclimate']);

//Route::get('/', function(){
    //return view('welcome');
//});
