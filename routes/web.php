<?php

use App\Http\Controllers\customerController;
use App\Http\Controllers\supplierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;

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

// Route::get('/aaa', function () {
//     return view('master');
    
// });
Route::get('/',[dashboardController::class,'dash'])->name('dashboard');
Route::get('/customers',[customerController::class,'customer'])->name('customer');
Route::get('/customers/manage',[customerController::class,'customermanage'])->name('customer.manage');
Route::post('/customers/create',[customerController::class,'customercreate'])->name('customer.create');
//end customer
Route::get('/suppliers',[supplierController::class,'supplier'])->name('suppler');
Route::get('/suppliers/manage',[supplierController::class,'suppliermanage'])->name('supplier.manage');
Route::post('/suppliers/create',[supplierController::class,'suppliercreate'])->name('supplier.create');
//end supplier
