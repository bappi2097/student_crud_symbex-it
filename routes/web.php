<?php

use App\Models\Student;
use App\Models\User;
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

auth()->login(User::find(1));

// auth()->logout();

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('home');
    }
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('print-id/{student}', [App\Http\Controllers\PrintController::class, 'printId'])->name('print-id');
Route::get('print-id-bulk', [App\Http\Controllers\PrintController::class, 'printIdBulk'])->name('print-id-bulk');
Route::post('store', [App\Http\Controllers\StudentController::class, 'store'])->name('store');
Route::put('update/{student}', [App\Http\Controllers\StudentController::class, 'update'])->name('update');
Route::delete('delete/{student}', [App\Http\Controllers\StudentController::class, 'destroy'])->name('delete');
Route::post('store-bulk', [App\Http\Controllers\StudentController::class, 'storeBulk'])->name('store-bulk');
