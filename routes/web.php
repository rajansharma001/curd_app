<?php

use App\Http\Controllers\CurdController;
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
    return view('index');
});

//display Data in Page 
Route::get('/', [CurdController::class, 'index'])->name('index');

//Insert Data IN database
Route::post('/', [CurdController::class, 'create'])->name('create');

//getting database value in form
Route::get('/edit/{id}', [CurdController::class, 'curdEdit'])->name('curdEdit');

//Updating Data
Route::put('/edit/{id}', [CurdController::class, 'curdUpdate'])->name('curdUpdate');

//Remove Data
Route::get('/delete/{id}', [CurdController::class, 'delete'])->name('delete');
