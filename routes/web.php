<?php

use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;

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
Route::get('/',[HomeController::class,'home'])->name('user.home');
Route::get('/details/{id}',[HomeController::class,'detail'])->name('details.blog');
Route::get('/cricket/blog',[HomeController::class,'cricketBlog'])->name('cricket.blog');
Route::get('/football/blog',[HomeController::class,'footballBlog'])->name('football.blog');
Route::get('/about-us',[HomeController::class,'aboutUs'])->name('about-us');
Route::get('/contact-us',[HomeController::class,'contactUs'])->name('contact-us');

//user section
Route::get('/registration',[UserController::class,'registration'])->name('user.registration');
Route::post('/registration/submit',[UserController::class,'registrationSubmit'])->name('registration.submit');
Route::post('/login',[UserController::class,'userLogin'])->name('user.login');
Route::get('/logout',[UserController::class,'userLogout'])->name('user.logout');

Route::get('/dashboard',[UserController::class,'userDashboard'])->name('user.dashboard');
Route::get('/profile/edit',[UserController::class,'userProfileEdit'])->name('user.profileEdit');
Route::post('/profile/update/{id}',[UserController::class,'userProfileUpdate'])->name('user.profileUpdate');

Route::post('/comment',[CommentController::class,'commentStore'])->name('user.comment');
Route::get('/comment/delete/{id}',[CommentController::class,'commentDelete'])->name('comment.delete');
Route::post('/comment/update/{id}',[CommentController::class,'commentUpdate'])->name('comment.update');







//admin section
Route::group(['prefix'=>'admin'],function (){
    Route::get('/home',[App\Http\Controllers\admin\HomeController::class,'home'])->name('admin.home');

    //Category section
    Route::resource('/category',CategoryController::class);
    Route::post('/category_status',[CategoryController::class,'categoryStatus'])->name('category.status');

    //Blog section
    Route::resource('/blog',BlogController::class);
    Route::post('/blog_status',[BlogController::class,'blogStatus'])->name('blog.status');

});
