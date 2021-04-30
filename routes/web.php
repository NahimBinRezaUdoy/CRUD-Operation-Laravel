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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customers', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/customers/store', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/customers/{customer}/show', [CustomerController::class, 'show'])->name('customer.show');
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('/customers/{customer}/update', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('/customers/{customer}/delete', [CustomerController::class, 'destroy'])->name('customer.delete');
