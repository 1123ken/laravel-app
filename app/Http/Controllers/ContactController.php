<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Contact;

use function PHPSTORM_META\map;

class ContactController extends Controller
{
    //入力内容の確認ページへ画面遷移
    public function index(){
        return view('index');
    }
    public function confirm(Request $request){
        //セッション情報をinputsに保存(name基準で読み込む)
        $inputs = $request->all();
        dump($inputs);
        //confirmにセッション情報を渡す
        return view('confirm', ['inputs'=> $inputs]);
    }
    public function complete(Request $request){
        Contact::create([
            "email" => $request ->email,
            "body" => $request -> body,
        ]);
        return view('complete');
    }   
}