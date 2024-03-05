<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class confirm extends Controller
{
    public function contactConfirm(){
        
        //確認画面を表示するコントローラ
        //OKなら完了画面へ
        return view('ContactConfirm');
    }

    public function newRegisterConfirm(){
        return view('newRegisterConirm');
    }
}