<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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
    return view('index');
});

Route::post('/formsubmit',[FormController::class, 'insert']);
Route::get('/show',[FormController::class, 'show']);
Route::get('/edit/{id}',[FormController::class, 'edit']);
Route::post('/update/{id}',[FormController::class, 'update']);
Route::get('/delete/{id}',[FormController::class, 'delete']);

