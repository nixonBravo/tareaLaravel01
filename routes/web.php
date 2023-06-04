<?php

use App\Http\Controllers\FrutaController;
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
    return view('app');
});

Route::controller(FrutaController::class)->group(function(){
    Route::get('/frutas', 'index');
    Route::post('/', 'store');
    Route::get('/edit/{id}', 'edit');
    Route::put('/update/{id}', 'update');
    Route::delete('/delete/{id}', 'destroy');
});