<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siteController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\WelcomeConctroller;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UserProfileController;

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


// user auth?
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login']);

Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'register']);
Route::get('/logout',[LogoutController::class,'logout']);

// sites and home 
Route::get('/',[SiteController::class,'index']);
Route::get('/about',[SiteController::class,'about']);
Route::get('/contact',[SiteController::class,'contact']);
Route::get('/services',[SiteController::class,'services']);

Route::get('/users',[SiteController::class,'dashboard']);
Route::get('/inc',[SiteController::class,'footer']);


Route::controller(PostsController::class)->group(function(){
    Route::resource('posts',PostsController::class);
    Route::post('/posts/show',[PostsController::class,'store']);
    Route::post('/edit/{id}',[PostsController::class,'update']);
    Route::get('destroy/{id}',[PostsController::class,'destroy']);
});


Route::get('delete/{id}',[DeleteController::class,'delete']);
Route::get('delete/{id}',[UserController::class,'destroy']);

Route::resource('users',UserController::class);
Route::get('account',[UserController::class,'account']);
Route::post('/users',[UserController::class,'store']);



// middleware for authentication
Route::view('/denied','denied');

Route::get('/adminpage',[UserController::class,'admin'])->middleware('admin');

Route::group(['middleware'=>'VerifyMiddleware'], function(){
//     // Route::view('posts',PostsController::class);

});

Route::get('/dashboard',[WelcomeConctroller::class,'dashboard']);

// profile
Route::get('/profile',[UserController::class,'profile']);

//add users
Route::get('/add_user',[UserController::class,'create']);


Route::controller(EmployeeController::class)->group(function(){
    Route::resource('/employees',EmployeeController::class);
    Route::get('/show/{id}','show');
    Route::get('/employee',[EmployeeController::class,'adminEmployee']);
    Route::get('/create','create');
    Route::post('/employees','store');
 
});

Route::controller(UserProfileController::class)->group(function(){
    Route::resource('/user-profile',UserProfileController::class);
     Route::get('/edit/{id}',[UserProfileController::class,'edit']);
    Route::get('/userProfile/{id}','show');
   
});


//FeedbackController
Route::controller(FeedbackController::class)->group(function(){
    Route::resource('site',FeedbackController::class);
    Route::get('/','index');
    Route::post('/','store');
});

// Group middleware
Route::group(['middleware'=>'auth'],function(){
    // Route::resource('allocate',AllocateController::class);
    // Route::get('/edit/{id}',[AllocateController::class,'edit']);
    // Route::post('/edit/{id}',[AllocateController::class,'store']);
    // Route::get('/allocateList',[AllocateController::class,'allocateList']);

});
