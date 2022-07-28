<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\UserController;

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
    return view('index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/all_ads",[AdsController::class,'index']);
Route::get("/all_ads1",[AdsController::class,'index1']);


Route::get("/abc",[AdsController::class,'create']);
Route::post("/abc1",[AdsController::class,'store']);


Route::get("/abc2",[AdsController::class,'create1']);
Route::post("/abc3",[AdsController::class,'store1']);

Route::get('/handle',[BotManController::class,'handle']);
Route::post('/handle',[BotManController::class,'handle']);

Route::get("/edituserprofile",[UserController::class,'edit']);

Route::post("/updateuser",[UserController::class,'update']);

Route::get('/myads',[AdsController::class,'myads']);

Route::get("/update_add/{id}",[AdsController::class,'update1']);
Route::post("/update_add1/{id}",[AdsController::class,'update2']);

Route::get("/delete_add/{id}",[AdsController::class,'deleteadd']);

Route::match(['get', 'post'], '/botman', [BotManController::class,'handle']);

Route::get("/ab",function(){
    return view('about');
});

Route::get("/contactus",function(){
    return view('contactus');
});
