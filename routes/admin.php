<?php





use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'admin' , 'middleware' => 'admin-auth:admin' ],function(){

    Route::get('/', function () {
        return view('back.index');
    })->name('admin.index');
    Route::resource('/admins' , \App\Http\Controllers\Admin\AdminController::class)->except('show');
    Route::resource('/property' , \App\Http\Controllers\Admin\PropertyController::class)->except('show');
    Route::resource('/about' , \App\Http\Controllers\Admin\AboutController::class)->except('show','store','create','delete');
    Route::resource('/contact' , \App\Http\Controllers\Admin\ContactController::class)->except('show','store','create','delete');
    Route::resource('/product' , \App\Http\Controllers\Admin\ProductController::class)->except('show');
    Route::resource('/process' , \App\Http\Controllers\Admin\ProcessController::class)->except('show');
    Route::resource('/money' , \App\Http\Controllers\Admin\MoneyController::class)->except('show');
    Route::resource('/withdraw' , \App\Http\Controllers\Admin\WithDrawController::class)->except(['show' , 'create' , 'store']);
    Route::get('orders/{id}',[\App\Http\Controllers\Admin\ProductController::class,'OrderForProduct'])->name('orders.products');
    Route::get('/orders',[\App\Http\Controllers\Admin\ProductController::class,'orders'])->name('orders.index');
    Route::post('/orders/{id}/delete',[\App\Http\Controllers\Admin\ProductController::class,'orderDelete'])->name('order.destroy');

    //users Routes
    Route::get('/users',[\App\Http\Controllers\Admin\UserController::class,'index'])->name('user.index');
    Route::get('/user/{id}',[\App\Http\Controllers\Admin\UserController::class,'edit'])->name('user.edit');
    Route::post('/user/edit/{id}' , [\App\Http\Controllers\Admin\UserController::class,'update'])->name('user.update');
    Route::post('/user/delete/{id}' , [\App\Http\Controllers\Admin\UserController::class,'destroy'])->name('user.destroy');
    //end Route Users

    //Messages Routes
    Route::get('/messages',[\App\Http\Controllers\Admin\MessageController::class,'index'])->name('message.index');
    Route::post('/message/delete/{id}',[\App\Http\Controllers\Admin\MessageController::class,'destroy'])->name('message.destroy');
    //end Message Routes
    
});


Route::group(['prefix'=> 'admin' , 'middleware' => 'guest:admin'],function()
{
    Route::get('/login',[\App\Http\Controllers\Admin\LoginController::class,'getLogin'])->name('get.admin.login');
    Route::post('/login',[\App\Http\Controllers\Admin\LoginController::class,'login'])->name('admin.login');

});