<?php

use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home2', function(){
    return view('home2');
});
Auth::routes();

Route::get('/request-loan', function(){
    return view('request-loan');
})->middleware('auth');

Route::post('/request-loan', [LoanController::class, 'store']);
Route::get('user', function(){
    $user = auth()->user();
    $user->name = "mahdi mahdi";
    $user->save();
    return auth()->user()->name;
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
