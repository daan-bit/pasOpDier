<?php

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


Route::get('/', [App\Http\Controllers\HuisdierController::class, 'index']);
Route::get('/huisdieren', [App\Http\Controllers\HuisdierController::class, 'index']);

Route::get('/huisdieren/{id}', [App\Http\Controllers\HuisdierController::class, 'show']);


Route::get('/create', [App\Http\Controllers\HuisdierController::class, 'create']); //'/huisdieren/create werkt pas wanneer een middleware toevoegd!!!
Route::post('/huisdieren', [App\Http\Controllers\HuisdierController::class, 'store']);





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
