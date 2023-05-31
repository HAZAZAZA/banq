<?php

use App\Http\Controllers\LoanController;
use App\Models\Amortization;
use App\Models\Loan;
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

Route::get('/profile', function(){
    $user = auth()->user();
    return view('profile', compact('user'));
})->middleware('auth');

Route::post('/profile', function(Request $request){


    $user = auth()->user();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->address = $request->address;
    $user->first_name = $request->first_name;
    $user->last_name = $request->last_name;
    $user->city = $request->city;
    $user->state = $request->state;
    $user->farmer_card_number = $request->farmer_card_number;
    // password
    if($request->password){
        $user->password = bcrypt($request->password);
    }
    $user->save();
    return redirect()->back();
})->middleware('auth');

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

Route::get('/loans/{id}', function (Request $request, $id){
    $loan = Loan::find($id);
//    $periodicity = $loan->periodicity;
//    $duration = $loan->loan_duration;
//    switch ($periodicity){
//        case 'trimester':
//            $periodicity = 3;
//            break;
//        case 'semester':
//            $periodicity = 2;
//            break;
//        case 'yearly':
//            $periodicity = 1;
//            break;
//    }
//    $amount = $loan->amount;
//    $rest = $amount;
//    $interest = $loan->interest;
//    $times = $duration * $periodicity;
//    $deposit = $amount / $times;
//    $date = date('Y-m-d', strtotime($loan->created_at. ' + '.$periodicity.' month'));
//    $tva = $loan->tva;
//    $total = 0;
//
//    for ($i = 0; $i < $times; $i++){
//        $amortization = new Amortization();
//        $amortization->loan_id = $loan->id;
//        $amortization->amount = $deposit;
//        $amortization->rest = $rest - $deposit;
//        $rest = $rest - $deposit;
//        $amortization->interest = $interest;
//        // date add 3 month if periodicity is trimester and so on
//        $amortization->date = $date;
//        $date = date('Y-m-d', strtotime($date. ' + '.$periodicity.' month'));
//        $amortization->total = $deposit + ($deposit * $interest / 100) + ($deposit * $tva / 100);
//        $amortization->save();
//
//    }
    // calculate loan amortization
//    for ($i = 0 , $i <= $periodicity , $i++){
//        $amortization = new \App\Models\Amortization();
//        $amortization->
//    }
    $amortizations = Amortization::where('loan_id', $loan->id)->get();
    return view('loan-table' , compact('loan', 'amortizations'));
});
