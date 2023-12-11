<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\FrontendController;
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

Route::get('/', [FrontendController::class, 'index']);

Route::get('/test', function () {
    return view('konoha.konoha');
});
// Route::get('/test2', function () {
//     return view('dashboard.editnews');
// });

Route::get('/login',[AuthController::class, 'index']);

Route::get('/contactus',[ContactusController::class, 'index'])->name('contactus.index');
Route::post('/',[ContactusController::class, 'insert'])->name('contactus.insert');

Route::get('/shownews', [NewsController::class, 'index'])->name('addnews.index');
Route::get('/addnews', [NewsController::class, 'create'])->name('addnews.create');
Route::post('/addnews', [NewsController::class, 'insert'])->name('addnews.insert');
Route::get('/shownews/{news}/editnews',[NewsController::class, 'edit'])->name('addnews.edit');
Route::put('/shownews/{news}/update',[NewsController::class, 'update'])->name('addnews.update');

