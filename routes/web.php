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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');

//This contains route about the citizens
Route::get('/citizens/create',[App\Http\Controllers\CitizensController::class, 'create'])->name("citizen.create");
Route::post('/citizens/store',[App\Http\Controllers\CitizensController::class, 'store'])->name("citizen.store");
Route::get('/citizens/show',[App\Http\Controllers\CitizensController::class, 'show'])->name("citizen.show");
Route::get('/citizens',[App\Http\Controllers\CitizensController::class, 'index'])->name("citizen");

//This contains route about the state
Route::get('/state/create',[App\Http\Controllers\StateController::class, 'create'])->name("state.create");
Route::post('/state/store',[App\Http\Controllers\StateController::class, 'store'])->name("state.store");
Route::get('/state',[App\Http\Controllers\StateController::class, 'index'])->name("state");

//This contains route about the lga
Route::get('/lga/create',[App\Http\Controllers\LgaController::class, 'create'])->name("lga.create");
Route::post('/lga/store',[App\Http\Controllers\LgaController::class, 'store'])->name("lga.store");
Route::get('/lga',[App\Http\Controllers\LgaController::class, 'index'])->name("lga");

//This contains route about the ward
Route::get('/ward/create',[App\Http\Controllers\WardController::class, 'create'])->name("ward.create");
Route::post('/ward/store',[App\Http\Controllers\WardController::class, 'store'])->name("ward.store");
Route::get('/ward',[App\Http\Controllers\WardController::class, 'index'])->name("ward");