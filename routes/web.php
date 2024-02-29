<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\getDBContoroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', 'ContactController@index');

//TOPページの表示設定
Route::get('/', function () {
    return view('index');
});

//indexページへのルート
Route::get('/index', [ContactController::class, 'index'])->name('index');
Route::post('/index', [ContactController::class, 'index'])->name('index');

//問い合わせ確認画面へのルート
Route::post('/confirm', [ContactController::class, 'confirm'])->name('confirm');

//問い合わせ完了画面へのルート
Route::post('/complete', [ContactController::class, 'complete'])->name('complete');

//ログイン画面へのルート
Route::get('/login', [ContactController::class, 'login'])->name('login');

//新規登録画面へのルート
Route::get('/newRegister', [ContactController::class, 'newRegister'])->name('newRegister');

//登録確認画面へのルート
Route::get('/newRegisterConfirm', [ContactController::class, 'newRegisterConfirm'])->name('newRegisterConfirm');

//登録完了画面へのルート                **要確認**
Route::post('/registerComp', [ContactController::class, 'registerComp'])->name('registerComp');
Route::get('/registerComp', [ContactController::class, 'registerComp'])->name('registerComp');

//管理者画面へのルート
Route::post('/admin', [ContactController::class, 'admin'])->name('admin');

//ログインユーザーのみ見れる処理        **要確認**
Route::middleware('auth')->group(function (){
    Route::get('/registerComp',[ContactController::class,'registerComp'])->name('registerComp');
});

//ログアウト処理                       **要確認**
Route::post('logout',[ContactController::class,'logout'])->name('logout');

//問い合わせ内容の一覧を表示
Route::get('/admin', 'App\Http\Controllers\getDBContoroller@admin');

//詳細画面へのルート　idを渡してidから他のテーブル情報を表示する
Route::get('contactBody/{id}', [getDBContoroller::class, 'contactBody'])->name('contactBody');

//一覧から問い合わせ削除処理
Route::post('/destroy{id}', [getDBContoroller::class, 'destroy'])->name('destroy');
