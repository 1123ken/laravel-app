<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\getDBContoroller;
use App\Http\Controllers\MailController;


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
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//indexページへのルート
Route::get('/contactIndex', [ContactController::class, 'contactIndex'])->name('contactIndex');
Route::post('/contactIndex', [ContactController::class, 'contactIndex'])->name('contactIndex');

//問い合わせ内容の一覧を表示
Route::get('/admin', 'App\Http\Controllers\getDBContoroller@admin');

//管理者画面へのルート
Route::post('/admin', [ContactController::class, 'admin'])->name('admin');

//問い合わせ確認画面へのルート
Route::post('/contactConfirm', [ContactController::class, 'contactConfirm'])->name('contactConfirm');

//問い合わせ完了画面へのルート
Route::post('/contactComplete', [ContactController::class, 'contactComplete'])->name('contactComplete');

//詳細画面へのルート　idを渡してidから他のテーブル情報を表示する
Route::get('contactBody/{id}', [getDBContoroller::class, 'contactBody'])->name('contactBody');

//一覧から問い合わせ削除処理
Route::post('/destroy{id}', [getDBContoroller::class, 'destroy'])->name('destroy');

require __DIR__.'/auth.php';

//そのページにアクセスしたらメールが送られる welcomeの末尾にsend-mailを入れると
Route::get('send-mail', [MailController::class,'welcome']);
