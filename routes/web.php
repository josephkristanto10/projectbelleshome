<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;

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


Route::get('/product', function () {
    return view('main.product');
});
Route::get('/bellecentre', function () {
    return view('admin.pages.signin');
});

Route::get('/', [homeController::class, "index"])->name("index_main");
Route::get('/collection', [productController::class, "index"])->name("index_main");
Route::get('/collection/{id}', [productController::class, "index"])->name("index_main");

Route::get('/bellehomecentre', [adminController::class, "belle_home_centre_index"])->name("belle_home_centre");
Route::post('/bellecentrelogincheck', [adminController::class, "cek_login"])->name("login_check");


Route::get('/bellehomecentre_category', [adminController::class, "belle_home_centre_index_category"])->name("belle_home_centre_category");
Route::get('/bellehomecentre_product', [adminController::class, "belle_home_centre_index_product"])->name("belle_home_centre_product");
Route::get('/bellehomecentre_mainhome', [adminController::class, "belle_home_centre_index_mainhome"])->name("belle_home_centre_mainhome");


Route::POST('/update_image_section_1', [adminController::class, "update_image_section_1"])->name("update_image_section_1");
Route::POST('/update_image_section_2', [adminController::class, "update_image_section_2"])->name("update_image_section_2");
Route::POST('/update_image_section_3', [adminController::class, "update_image_section_3"])->name("update_image_section_3");


Route::get('/getallproduct', [adminController::class, "see_table_all_product"])->name("getallproduct");
Route::POST('/upload_product', [adminController::class, "upload_new_product"])->name("upload_product");
Route::POST('/delete_product', [adminController::class, "delete_product"])->name("delete_product");


Route::get('/getall_category', [adminController::class, "see_table_all_category"])->name("getallcategory");
Route::POST('/upload_category', [adminController::class, "upload_new_category"])->name("upload_category");
Route::POST('/delete_category', [adminController::class, "delete_category"])->name("delete_category");


Route::get('/pagination/fetch_data_index',  [productController::class,"fetch_data"]);