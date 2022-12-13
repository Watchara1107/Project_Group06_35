<?php
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\ElementController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
//rout อาจารย์สา
// Route::get('/', function () {
// return view('welcome');
// });

Route::get('/', [IndexController::class, 'index'])->name('promotepage.home');



Auth::routes();
//profiles
Route::get('/home', [HomeController::class, 'index'])->name('home');
//admin
Route::get('admin/index',[HomeController::class,'admin'])->name('admin');
//category
Route::get('/admin/category/index',[CategoryController::class,'index'])->name('category');
Route::get('/admin/category/create',[CategoryController::class,'createform'])->name('category.create');
//Users
Route::get('/admin/user/index',[UserController::class,'index'])->name('user');
//Route::get('/admin/user/index',[UserController::class,'index'])->name('user');
//product
Route::get('/admin/product/index',[ProductController::class,'index'])->name('product');
Route::get('/admin/product/create',[ProductController::class,'createform'])->name('product.create');
Route::post('/admin/product/insert',[ProductController::class,'insert'])->name('product.insert');
Route::get('/admin/product/edit{id}',[ProductController::class,'editform'])->name('product.edit');
Route::post('/admin/product/update{id}',[ProductController::class,'update'])->name('product.update');
Route::get('/admin/product/delete{id}',[ProductController::class,'delete'])->name('product.delete');
//contact
Route::get('/admin/content/index',[ContentController::class,'index'])->name('content');
Route::get('/admin/content/create',[ContentController::class,'createform'])->name('content.create');
Route::post('/admin/contact/insert',[ContentController::class,'insert'])->name('contact.insert');
Route::get('/admin/contact/delete/{id}',[ContentController::class, 'delete']);
//element
// Route::get('/admin/element/index',[ElementController::class,'index'])->name('element');
// Route::get('/admin/element/create',[ElementController::class,'createform'])->name('element.create');
