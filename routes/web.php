<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\SubModuleController;
use App\Http\Controllers\ModuleController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () { 
    // Dashboard Route
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');
    // module
    Route::resource('module',ModuleController::class);
    //subModule 
    Route::resource('subModule',SubModuleController::class);
});
