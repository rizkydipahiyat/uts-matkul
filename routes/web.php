<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatkulController;

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

// Route::get('/', function () {
//     return view('matkul');
// });
Route::get('create', [MatkulController::class, 'create'])->name('create');
Route::post('create', [MatkulController::class, 'store']);
Route::get('{id}/edit', [MatkulController::class, 'edit'])->name('edit');
Route::put('{id}/edit', [MatkulController::class, 'update']);
Route::delete('delete/{id}', [MatkulController::class, 'destroy']);
Route::get('/', [MatkulController::class, 'table'])->name('matkul');
