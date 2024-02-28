<?php

use App\Http\Controllers\ContactController;
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
    // return view('welcome');
    return view('index');
});

Route::post('/index', [ContactController::class, 'index'])->name('index');

Route::post('/confirm', [ContactController::class, 'confirm'])->name('confirm');

Route::post('/complete', [ContactController::class, 'complete'])->name('complete');

//問い合わせ内容の一覧を表示
//Route::get('/uri', 'コントローラー名@アクション名');
Route::get('/admin', 'App\Http\Controllers\getDBContoroller@admin');