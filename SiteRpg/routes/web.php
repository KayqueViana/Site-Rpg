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

use App\Http\Controllers\RpgController;

Route::get('/', [RpgController::class, 'index']);
Route::get('/info', [RpgController::class, 'info']);
Route::get('/bestiario', [RpgController::class, 'bestiary']);
Route::get('/mapas', [RpgController::class, 'maps']);
Route::get('/e1', [RpgController::class, 'e1']);
Route::get('/e2', [RpgController::class, 'e2']);






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
