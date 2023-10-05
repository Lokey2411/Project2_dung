<?php

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

Route::prefix('admin')->group(function (){
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    Route::get('/create', [\App\Http\Controllers\AdminController::class, 'create'])->name('admin.create');
    Route::post('/create', [\App\Http\Controllers\AdminController::class, 'store'])->name('admin.store');
    Route::get('/{id}/edit', [\App\Http\Controllers\AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/{id}/edit', [\App\Http\Controllers\AdminController::class, 'update'])->name('admin.update');
    Route::delete('/{id}', [\App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.destroy');
});
Route::prefix('customer')->group(function (){
    Route::get('/', [\App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');
    Route::get('/create', [\App\Http\Controllers\CustomerController::class, 'create'])->name('customer.create');
    Route::post('/create', [\App\Http\Controllers\CustomerController::class, 'store'])->name('customer.store');
    Route::get('/{id}/edit', [\App\Http\Controllers\CustomerController::class, 'edit'])->name('customer.edit');
    Route::put('/{id}/edit', [\App\Http\Controllers\CustomerController::class, 'update'])->name('customer.update');
    Route::delete('/{id}', [\App\Http\Controllers\CustomerController::class, 'destroy'])->name('customer.destroy');
});
Route::prefix('motel')->group(function (){
   Route::get('/', [\App\Http\Controllers\MotelController::class, 'index'])->name('motel.index');
   Route::get('/create', [\App\Http\Controllers\MotelController::class, 'create']) ->name('motel.create');
   Route::post('/create', [\App\Http\Controllers\MotelController::class, 'store']) ->name('motel.store');
   Route::get('/{id}/edit', [\App\Http\Controllers\MotelController::class, 'edit']) ->name('motel.edit');
   Route::put('/{id}/edit', [\App\Http\Controllers\MotelController::class, 'update'])->name('motel.update');
   Route::delete('/{id}', [\App\Http\Controllers\MotelController::class, 'destroy'])->name('motel.destroy');
});
Route::prefix('contract')->group(function (){
    Route::get('/', [\App\Http\Controllers\ContractController::class, 'index'])->name('contract.index');
});
Route::prefix('resident')->group(function (){
    Route::get('/', [\App\Http\Controllers\ResidentController::class, 'index'])->name('resident.index');
});
Route::prefix('transaction')->group(function (){
    Route::get('/', [\App\Http\Controllers\TransactionController::class, 'index'])->name('transaction.index');
});
