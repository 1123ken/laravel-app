<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //入力内容の確認ページへ画面遷移
    public function confirm(){
        return view('confirm');
    }

    public function complete(){
        return view('complete');
    }
}
