<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
Route::get('/register',[PageController::class,'create'])->name('hello');
Route::post('/register',[PageController::class,'createsub'])->name('hhello');
Route::get('/list',[PageController::class,'list'])->name('listsubmit');
Route::get('/user/details/{id}/info',[PageController::class,'editsubmit'])->name('helloedit');
Route::get('/login',[PageController::class,'login'])->name('log in');
Route::post('/login',[PageController::class,'loginsub'])->name('logiin');
Route::get('/dash',[PageController::class,'dashboard'])->name('dashb');



