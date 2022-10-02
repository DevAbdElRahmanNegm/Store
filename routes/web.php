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
    return view('front.index');
})->middleware('profile');


Route::post('create_user' , [\App\Http\Controllers\UserController::class,'store'])->name('create.user');

Route::get('/error', function () {
    return view('front.error');
})->name('error');


Route::get('contact-us',[\App\Http\Controllers\HomeController::class , 'contact'])->name('contact');
Route::get('about-us',[\App\Http\Controllers\HomeController::class , 'about'])->name('about');
Route::post('/message',[\App\Http\Controllers\HomeController::class,'MessageStore'])->name('message.store');


Route::group(['middleware' => 'auth' ],function(){

    Route::get('/home', function () {
        return view('front.home');
    });



    Route::get('/profile/{id}',[\App\Http\Controllers\UserController::class,'edit'])->name('user-edit');
    Route::post('/profile/update/{id}',[\App\Http\Controllers\UserController::class,'update'])->name('user-update');
    Route::post('order',[\App\Http\Controllers\HomeController::class,'order'])->name('order.create')->middleware('userTrack');
    Route::get('products',[\App\Http\Controllers\HomeController::class , 'Product'])->name('product')->middleware('userTrack');
    Route::get('products/{id}',[\App\Http\Controllers\HomeController::class , 'ProductShow'])->name('ProductShow')->middleware('userTrack');
    Route::get('my-balance',[\App\Http\Controllers\HomeController::class , 'balance'])->name('balance')->middleware('userTrack');
    Route::get('withdraw',[\App\Http\Controllers\HomeController::class , 'withdraw'])->name('withdraw')->middleware('userTrack');
    Route::post('/withdraw/sent',[\App\Http\Controllers\HomeController::class,'withDrawSent'])->name('withDrawSent');
    Route::get('/get-user-code&password',[\App\Http\Controllers\HomeController::class,'getUserCodeView'])->name('soon');
    Route::get('/get/get-user-code&password',[\App\Http\Controllers\HomeController::class,'getUserCode'])->name('getUserCode');

});



Auth::routes();


