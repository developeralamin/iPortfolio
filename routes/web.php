<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\HeadingController;
use App\Http\Controllers\InterstedController;




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

//Laravel Prevent Browser Back Button After Logout



Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[FrontendController::class,'FrontPage'])->name('FrontPage');
Route::get('/logo-set',[FrontendController::class,'LogoSet'])->name('LogoSet');



Route::prefix('logo')->group(function (){

Route::get('/logo',[LogoController::class,'Logo'])->name('Logo');
Route::get('/add-logo',[LogoController::class,'addlogo'])->name('add.logo');
Route::post('/add-logo-post',[LogoController::class,'logopost'])->name('logo.post');
Route::get('/edit-logo-post/{id}',[LogoController::class,'editlogopost'])->name('edit.logo.post');
Route::post('/update-logo-post/{id}',[LogoController::class,'updatelogopost'])->name('update.logo.post');
Route::get('/delete-logo-post/{id}',[LogoController::class,'deletelogopost'])->name('delete.logo.post');

});


Route::prefix('headning')->group(function (){

Route::get('/headning',[HeadingController::class,'headning'])->name('headning');
Route::get('/add-headning',[HeadingController::class,'addheadning'])->name('add.headning');
Route::post('/add-headning-post',[HeadingController::class,'headningpost'])->name('headning.post');
Route::get('/edit-headning-post/{id}',[HeadingController::class,'editheadningpost'])->name('edit.headning.post');
Route::post('/update-headning-post/{id}',[HeadingController::class,'updateheadningpost'])->name('update.headning.post');
Route::get('/delete-headning-post/{id}',[HeadingController::class,'deleteheadningpost'])->name('delete.headning.post');

});


Route::prefix('intersted')->group(function (){

Route::get('/intersted',[InterstedController::class,'intersted'])->name('intersted');
Route::get('/add-intersted',[InterstedController::class,'addintersted'])->name('add.intersted');

Route::post('/add-intersted-post',[InterstedController::class,'interstedpost'])->name('intersted.post');

Route::get('/edit-intersted-post/{id}',[InterstedController::class,'editinterstedpost'])->name('edit.intersted.post');

Route::post('/update-intersted-post/{id}',[InterstedController::class,'updateinterstedpost'])->name('update.intersted.post');

Route::get('/delete-intersted-post/{id}',[InterstedController::class,'deleteinterstedpost'])->name('delete.intersted.post');

});






});

//Laravel Prevent Browser Back Button After Logout
