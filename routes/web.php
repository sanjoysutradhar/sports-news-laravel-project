<?php

use App\Http\Controllers\HomeController;
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

//Route::get('/admin', function () {
//    return view('admin.home');
//});

//Frontend section
Route::get('/',[App\Http\Controllers\HomeController::class,'home'])->name('user.home');


//admin section
Route::group(['prefix'=>'admin'],function (){
    Route::get('/home',[App\Http\Controllers\admin\HomeController::class,'home'])->name('admin.home');

    //Category section
    Route::resource('/category',\App\Http\Controllers\admin\CategoryController::class);
});
