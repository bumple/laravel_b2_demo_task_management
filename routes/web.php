<?php
use App\Http\Controllers\CustomerController;
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

Route::get('/',function (){
   return view('welcome');
});

Route::prefix('customer')->group(function (){


    Route::get('index',[CustomerController::class,'index'])->name('customer.index');

    Route::get('create',[CustomerController::class,'create'])->name('customer.create');

    Route::get('store',[CustomerController::class,'store'])->name('customer.store');

    Route::get('{id}/show',[CustomerController::class,'show','id'])->name('customer.show');

    Route::get('{id}/edit',[CustomerController::class,'edit','id'])->name('customer.edit');

    Route::patch('{id}/update', function () {
        // xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
    });

    Route::delete('{id}/',[CustomerController::class,'delete'])->name('customer.delete');


});
