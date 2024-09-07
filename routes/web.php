<?php

use App\Http\Controllers\backend\AjaxController;
use App\Http\Controllers\backend\AssignPermissionController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\PermissionController;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\SubModuleController;
use App\Http\Controllers\ModuleController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () { 
    // Dashboard Route
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');
    // module route
    Route::resource('module',ModuleController::class);
    //subModule route
    Route::resource('subModule',SubModuleController::class);
    //permission route
    Route::resource('permission',PermissionController::class);
    //role Route
    Route::resource('role',RoleController::class);
    //assignPermission
    Route::resource('assignPermission',AssignPermissionController::class);
    //brand
    Route::resource('brand',BrandController::class);
    //ajax route
    //get-subModule route
    route::get('/get-subModule',[AjaxController::class,'getSubModule'])->name('get-subModule');
});
