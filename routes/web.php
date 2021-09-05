<?php

use App\Http\Controllers\Students;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\PaymentsController;
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

Route::get('/students', [StudentsController::class, 'index']);
Route::get('/students/delete/{id}', [StudentsController::class, 'destroy']);
Route::get('/students/create', [StudentsController::class, 'create']);
Route::post('/students/store', [StudentsController::class, 'store']);
Route::get('/students/edit/{id}', [StudentsController::class, 'edit']);
Route::post('/students/update', [StudentsController::class, 'update']);

Route::get('/payments', [PaymentsController::class, 'index']);
Route::get('/payments/delete/{id}', [PaymentsController::class, 'destroy']);
Route::get('/payments/create', [PaymentsController::class, 'create']);
Route::post('/payments/store', [PaymentsController::class, 'store']);
