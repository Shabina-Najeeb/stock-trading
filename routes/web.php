<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Modules\Admin\HomeController;
use App\Http\Controllers\Modules\Admin\ProductController;
use App\Http\Controllers\Modules\Admin\ProductlistController;
use App\Http\Controllers\Modules\Admin\UserController;
use App\Http\Controllers\Modules\Admin\RiskController;
use App\Http\Controllers\Modules\Admin\OrdersController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/backend',[App\Http\Controllers\Modules\Admin\HomeController::class, 'index'])->name('admin');

Route::get('/admin/product',[App\Http\Controllers\Modules\Admin\ProductController::class, 'index'])->name('adminproduct');
Route::post('/admin/addproduct',[App\Http\Controllers\Modules\Admin\ProductController::class,'addProduct'])->name('adminaddproduct');
Route::get('/admin/editProduct/{id}',[App\Http\Controllers\Modules\Admin\ProductController::class,'editProduct']);
Route::get('/admin/deleteProduct/{id}',[App\Http\Controllers\Modules\Admin\ProductController::class,'deleteProduct']);
Route::get('/admin/productTable',[App\Http\Controllers\Modules\Admin\ProductController::class,'productTable'])->name('adminproducttable');
Route::get('/admin/productlist',[App\Http\Controllers\Modules\Admin\ProductlistController::class, 'index'])->name('adminlistproduct');

Route::get('/admin/user',[App\Http\Controllers\Modules\Admin\UserController::class, 'index'])->name('adminUser');
Route::post('/admin/adduser',[App\Http\Controllers\Modules\Admin\UserController::class,'addUser'])->name('adminUseradd');
Route::get('/admin/edituser/{id}',[App\Http\Controllers\Modules\Admin\UserController::class,'editUser']);
Route::get('/admin/deleteuser/{id}',[App\Http\Controllers\Modules\Admin\UserController::class,'deleteUser']);
Route::get('/admin/userTable',[App\Http\Controllers\Modules\Admin\UserController::class,'userTable'])->name('adminUsertable');



Route::get('/admin/risk',[App\Http\Controllers\Modules\Admin\RiskController::class, 'index'])->name('adminRiskControl');
Route::get('/admin/order',[App\Http\Controllers\Modules\Admin\OrdersController::class, 'index'])->name('adminRiskControl');

