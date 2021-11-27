<?php

use App\Http\Controllers\customerController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\genericController;
use App\Http\Controllers\medicineController;

use App\Http\Controllers\typeController;

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

//start customer
Route::get('/customers',[customerController::class,'customer'])->name('customer');
Route::get('/customers/manage',[customerController::class,'customermanage'])->name('customer.manage');
Route::post('/customers/create',[customerController::class,'customercreate'])->name('customer.create');
//end customer

//start supplier
Route::get('/suppliers',[supplierController::class,'supplier'])->name('suppler');
Route::get('/suppliers/manage',[supplierController::class,'suppliermanage'])->name('supplier.manage');
Route::post('/suppliers/create',[supplierController::class,'suppliercreate'])->name('supplier.create');
//end supplier

//start generic
Route::get('/generic',[genericController::class,'generic'])->name('generic');
Route::post('/generic/create',[genericController::class,'genericcreate'])->name('generic.create');
Route::get('/generic/delete/{id}',[genericController::class,'delete'])->name('generic.delete');

//end generic

//start type
Route::get('/medicine_type',[typeController::class,'type'])->name('type');
Route::post('/medicine_type/create',[typeController::class,'typecreate'])->name('type.create');
Route::get('/medicine_type/delete/{id}',[typeController::class,'delete'])->name('type.delete');

//end type

//start medicine
Route::get('/medicines',[medicineController::class,'medicine'])->name('medicine');
Route::get('/medicines/manage',[medicineController::class,'medicinemanage'])->name('medicine.manage');
Route::post('/medicines/create',[medicineController::class,'medicinecreate'])->name('medicine.create');
//end medicine

//start purchase
Route::get('/purchase',[purchaseController::class,'purchase'])->name('purchase');

