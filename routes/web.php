<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Modules\Admin\HomeController;
use App\Http\Controllers\Modules\Admin\ProductController;
use App\Http\Controllers\Modules\Admin\ProductlistController;
use App\Http\Controllers\Modules\Admin\UserController;
use App\Http\Controllers\Modules\Admin\RiskController;
use App\Http\Controllers\Modules\Admin\OrdersController;
use App\Http\Controllers\Modules\Admin\CategoryController;
use App\Http\Controllers\Modules\Admin\CategoryLIstTableController;
use App\Http\Controllers\Modules\Admin\AddarticleController;
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


Route::get('/admin/producttablelist',[App\Http\Controllers\Modules\Admin\ProductlistController::class, 'index'])->name('adminlistproduct');
Route::post('/admin/addproductlist',[App\Http\Controllers\Modules\Admin\ProductlistController::class,'addProduct'])->name('adminaddproduct');
Route::get('/admin/editProductlist/{id}',[App\Http\Controllers\Modules\Admin\ProductlistController::class,'editProduct']);
Route::get('/admin/deleteProductlist/{id}',[App\Http\Controllers\Modules\Admin\ProductlistController::class,'deleteProduct']);
Route::get('/admin/productTabledisplay',[App\Http\Controllers\Modules\Admin\ProductlistController::class, 'productTable'])->name('adminlistproduct');

Route::get('/admin/user',[App\Http\Controllers\Modules\Admin\UserController::class, 'index'])->name('adminUser');
Route::post('/admin/adduser',[App\Http\Controllers\Modules\Admin\UserController::class,'addUser'])->name('adminUseradd');
Route::get('/admin/editUser/{id}',[App\Http\Controllers\Modules\Admin\UserController::class,'editUser']);
Route::get('/admin/deleteUser/{id}',[App\Http\Controllers\Modules\Admin\UserController::class,'deleteUser']);
Route::get('/admin/userTable',[App\Http\Controllers\Modules\Admin\UserController::class,'userTable'])->name('adminUsertable');

Route::get('/admin/userlist',[App\Http\Controllers\Modules\Admin\UserListController::class, 'index'])->name('adminUser');
Route::post('/admin/adduserlist',[App\Http\Controllers\Modules\Admin\UserListController::class,'addUser'])->name('adminUseradd');
Route::get('/admin/editUserlist/{id}',[App\Http\Controllers\Modules\Admin\UserListController::class,'editUser']);
Route::get('/admin/deleteUserlist/{id}',[App\Http\Controllers\Modules\Admin\UserListController::class,'deleteUser']);
Route::get('/admin/userlistTable',[App\Http\Controllers\Modules\Admin\UserListController::class,'userTable'])->name('adminUsertable');

Route::get('/admin/risk',[App\Http\Controllers\Modules\Admin\RiskController::class, 'index'])->name('adminRiskControl');
Route::post('/admin/addRisk',[App\Http\Controllers\Modules\Admin\RiskController::class,'addRisk'])->name('adminaddRiskcontrol');
Route::get('/admin/editRisk/{id}',[App\Http\Controllers\Modules\Admin\RiskController::class,'editRisk']);
Route::get('/admin/deleteRisk/{id}',[App\Http\Controllers\Modules\Admin\RiskController::class,'deleteRisk']);
Route::get('/admin/riskTable',[App\Http\Controllers\Modules\Admin\RiskController::class,'riskTable'])->name('adminRiskcontroltable');


Route::get('/admin/order',[App\Http\Controllers\Modules\Admin\OrdersController::class, 'index'])->name('adminOrders');
Route::get('/admin/order_log',[App\Http\Controllers\Modules\Admin\OrdersController::class, 'orderLog'])->name('adminOrdersLog');

Route::get('/admin/category',[App\Http\Controllers\Modules\Admin\CategoryController::class, 'index'])->name('adminCategory');
Route::post('/admin/addCategory',[App\Http\Controllers\Modules\Admin\CategoryController::class,'addCategory'])->name('adminCategoryadd');
Route::get('/admin/editCategory/{id}',[App\Http\Controllers\Modules\Admin\CategoryController::class,'editCategory']);
Route::get('/admin/deleteCategory/{id}',[App\Http\Controllers\Modules\Admin\CategoryController::class,'deleteCategory']);
Route::get('/admin/categoryTable',[App\Http\Controllers\Modules\Admin\CategoryController::class,'categoryTable'])->name('adminCategorytable');



 Route::post('/admin/addCategory',[App\Http\Controllers\Modules\Admin\CategoryLIstTableController::class,'addCategory'])->name('adminCategoryadd');
Route::get('/admin/editCategory/{id}',[App\Http\Controllers\Modules\Admin\CategoryLIstTableController::class,'editCategory']);
Route::get('/admin/deleteCategory/{id}',[App\Http\Controllers\Modules\Admin\CategoryLIstTableController::class,'deleteCategory']);
Route::get('/admin/categorytable',[App\Http\Controllers\Modules\Admin\CategoryLIstTableController::class,'categoryTable'])->name('adminCategorytable');

Route::get('/admin/categorylist',[App\Http\Controllers\Modules\Admin\CategoryLIstTableController::class, 'index'])->name('adminCategorylist');
 


Route::get('/admin/article',[App\Http\Controllers\Modules\Admin\AddarticleController::class,'index'])->name('adminArticleadd');
Route::post('/admin/addArticle',[App\Http\Controllers\Modules\Admin\AddarticleController::class,'addArticle'])->name('adminAddarticleadd');
Route::get('/admin/editArticle/{id}',[App\Http\Controllers\Modules\Admin\AddarticleController::class,'editArticle']);
Route::get('/admin/deleteArticle/{id}',[App\Http\Controllers\Modules\Admin\AddarticleController::class,'deleteArticle']);
Route::get('/admin/articleTable',[App\Http\Controllers\Modules\Admin\AddarticleController::class,'articleTable'])->name('adminArticletable');

Route::get('/admin/articlelist',[App\Http\Controllers\Modules\Admin\ArticleListController::class,'index'])->name('adminArticleadd');
Route::post('/admin/addArticlelist',[App\Http\Controllers\Modules\Admin\ArticleListController::class,'addArticle'])->name('adminAddarticleadd');
Route::get('/admin/editArticlelist/{id}',[App\Http\Controllers\Modules\Admin\ArticleListController::class,'editArticle']);
Route::get('/admin/deleteArticlelist/{id}',[App\Http\Controllers\Modules\Admin\ArticleListControllerr::class,'deleteArticle']);
Route::get('/admin/articlelistTable',[App\Http\Controllers\Modules\Admin\ArticleListController::class,'articleTable'])->name('adminArticletable');







