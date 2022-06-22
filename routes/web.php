<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CreateTable;
use App\Http\Controllers\hotelController;






// Route::get('form',function (){
//     return view('test');
// });
// Route::post('form',[DemoController::class,'tinhtong']);



// Route::get('Signup',[signupController::class,'index']);
// Route::post('Signup',[signupController::class,'displayInfor']);

// Route::get('/',function (){
//     return view('form_select');
// });

Route::get('/trangchu',[PageController::class,'getIndex']);
// Route::get('/trangchu', [PageController::class,'getIndex']);
// Route::get('/sql', [CreateTable::class,'table']);

// Route::get('Signup',[hotelController::class, 'index']);
// Route::post('Signup',[hotelController::class, 'addRoom']);

// Route::get('/',function(){
//     $data = DB::table('users')->find(3);
//     print_r($data);
// });

