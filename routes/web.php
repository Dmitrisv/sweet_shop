<?php

use App\Http\Controllers\AddItemController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;

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

Route::get('/',[MainPageController::class, 'index'])->name('menu');


Route::get("/auth/reg",[AuthController::class,'create'])->name('reg');
Route::post("/auth/reg",[AuthController::class,'store']);

Route::get("/auth/login",[AuthController::class,'getformlogon']);
Route::post("/auth/login",[AuthController::class,'log'])->name('logon');
Route::get("/logout",[AuthController::class,'logout'])->name('logout');

Route::post('/add_item',[AddItemController::class,'store']);

Route::get("/profile",[MainPageController::class,'profile'])->name('profile');
Route::get("/location",[MainPageController::class,'locate'])->name('location');


Route::get('/edit',[MainPageController::class,'editable']);
Route::get('/edit/{id}',[MainPageController::class,'edit']);
Route::post('/edit',[MainPageController::class,'edit_item']);


Route::get('/delete/{id}',[MainPageController::class,'delete']);


Route::get('/view/{id}',[MainPageController::class,'viewproduct']);

Route::get('/cart',[MainPageController::class,'cart'])->name('cart');

Route::get('/about',[MainPageController::class,'about'])->name('about');




Route::post('/storetocart',[MainPageController::class,'addtocart']);

Route::get('/test',function(){
    return view("welcome");
});

Route::get("/admin", function(){
    if(auth()->user()->is_root){
        return view("addproduct");
    }
    return abort(403);
});


