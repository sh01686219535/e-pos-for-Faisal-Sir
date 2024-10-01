<?php

use App\Http\Controllers\backend\AjaxController;
use App\Http\Controllers\backend\AssignPermissionController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\PermissionController;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\SubModuleController;
use App\Http\Controllers\backend\SizeController;
use App\Http\Controllers\backend\ColorController;
use App\Http\Controllers\backend\SupplierController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ItemInfoController;
use App\Http\Controllers\backend\PermissionAssignController;
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
    Route::resource('sub_module',SubModuleController::class);
    //permission route
    Route::resource('permission',PermissionController::class);
    //role Route
    Route::resource('role',RoleController::class);
    //assignPermission
    Route::resource('assignPermission',AssignPermissionController::class);
    //brand
    Route::resource('brand',BrandController::class);
    //category
    Route::resource('category',CategoryController::class);
    //Color
    Route::resource('color',ColorController::class);
    //Size
    Route::resource('size',SizeController::class);
    //supplier
    Route::resource('supplier',SupplierController::class);
    //Item Info Route
    Route::resource('item_info',ItemInfoController::class);
    //ajax route
    //get-subModule route
    route::get('/get-sub_module',[AjaxController::class,'getSubModule'])->name('get-sub_module');
    Route::get('/get-category', [AjaxController::class, 'getCategory']);
     //access-control
     Route::get('/access-control', [PermissionAssignController::class, 'showAccessControl'])->name('access-control');
     Route::post('/access-control', [PermissionAssignController::class, 'accessControl'])->name('accessControl');
     Route::get('/add-assign-permission', [PermissionAssignController::class, 'addAssignPermission'])->name('add-assign-permission');
     Route::get('/edit-assign-permission/{id}', [PermissionAssignController::class, 'showEditAssignPermission'])->name('showEdit-assign-permission');
     Route::post('/edit-assign-permission', [PermissionAssignController::class, 'editAssignPermission'])->name('edit-assign-permission');
     Route::get('/delete-assign-permission/{id}', [PermissionAssignController::class, 'deleteAssignPermission'])->name('delete-assign-permission');
});
