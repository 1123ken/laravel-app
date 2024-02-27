<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class confirm extends Controller
{
    public function confirm(){
        
        //確認画面を表示するコントローラ
        //OKなら完了画面へ
        return view('confirm');
    }
}