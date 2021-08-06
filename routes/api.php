<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/students', [StudentController::class, 'index'])->name('student.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/students/store', [StudentController::class, 'store'])->name('student.store');
Route::get('/students/{student}/show', [StudentController::class, 'show'])->name('student.show');
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/students/{student}/update', [StudentController::class, 'update'])->name('student.update');
Route::delete('/students/{student}/delete', [StudentController::class, 'destroy'])->name('student.destroy');
