<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactusController;
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
    return view('index');
});

Route::get('/test', function () {
    return view('konoha.konoha');
});


Route::get('/contactus',[ContactusController::class, 'index'])->name('contactus.index');
Route::post('/',[ContactusController::class, 'insert'])->name('contactus.insert');

Route::get('/addnews', [NewsController::class, 'index']);
Route::post('/addnews', [NewsController::class, 'insert'])->name('addnews.insert');