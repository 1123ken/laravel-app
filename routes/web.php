<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\getDBContoroller;
use Illuminate\Support\Facades\Route;

//TOPページの表示設定
Route::get('/', function () {
    return view('index');
});

//indexページへのルート
Route::post('/index', [ContactController::class, 'index'])->name('index');
Route::get('/index', [ContactController::class, 'index'])->name('index');

//確認画面へのルート
Route::post('/confirm', [ContactController::class, 'confirm'])->name('confirm');

//問い合わせ完了画面へのルート
Route::post('/complete', [ContactController::class, 'complete'])->name('complete');

//ログイン画面へのルート
Route::get('/login', [ContactController::class, 'login'])->name('login');
Route::post('/login', [ContactController::class, 'login'])->name('login');

//新規登録画面へのルート
Route::post('/newRegister', [ContactController::class, 'newRegister'])->name('newRegister');
Route::get('/newRegister', [ContactController::class, 'newRegister'])->name('newRegister');

//登録確認画面へのルート
Route::post('/newRegisterConfirm', [ContactController::class, 'newRegisterConfirm'])->name('newRegisterConfirm');
Route::get('/newRegisterConfirm', [ContactController::class, 'newRegisterConfirm'])->name('newRegisterConfirm');

//登録完了画面へのルート
Route::post('/registerComp', [ContactController::class, 'registerComp'])->name('registerComp');
Route::get('/registerComp', [ContactController::class, 'registerComp'])->name('registerComp');

//管理者画面へのルート
Route::post('/admin', [ContactController::class, 'admin'])->name('admin');
Route::get('/admin', [getDBContoroller::class, 'admin'])->name('admin');


//問い合わせ内容の一覧を表示
//Route::get('/uri', 'コントローラー名@アクション名');
Route::get('/admin', 'App\Http\Controllers\getDBContoroller@admin');

//詳細画面へのルート
Route::get('/contactBody', 'App\Http\Controllers\getDBContoroller@admin')->name('contactBody');