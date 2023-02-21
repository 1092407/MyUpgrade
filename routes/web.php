<?php

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

Route::get('/', function () {
    return view('prova');
})->name('welcome');


/*
Route::get('/prova', function () {
    return view('prova');
});
*/
Route::post('/home/InserisciAuto',[App\Http\Controllers\HomeController::class, 'provarequest'])->name('checkreq');

//Route::view('/prova','prova')->name('prova');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/UpdatePass', [App\Http\Controllers\UpdatePassController::class, 'ShowChangePassForm'])->name('ShowChangePassForm')->middleware('auth');
Route::post('/UpdatePass', [App\Http\Controllers\UpdatePassController::class, 'ChangePass'])->name('ChangePass')->middleware('auth');
