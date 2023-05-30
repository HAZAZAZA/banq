<?php

use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Request;
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

Route::get('/home', function(){
    return redirect()->to('/');
});
Route::get('/logout', function (Request $request){
   \Illuminate\Support\Facades\Auth::logout();
    $request->session()->invalidate();

    $request->session()->regenerateToken();
   return redirect()->back('/');
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
