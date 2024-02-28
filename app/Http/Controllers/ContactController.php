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

    //入力内容確認ページに画面遷移
    public function confirm(Request $request){
        //セッション情報をinputsに保存(name基準で読み込む)
        $inputs = $request->all();
        dump($inputs);
        //confirmにセッション情報を渡す
        return view('confirm', ['inputs'=> $inputs]);
    }

    //問い合わせフォーム登録後、完了ページに画面遷移
    public function complete(Request $request){
        Contact::create([
            "email" => $request ->email,
            "body" => $request -> body,
        ]);
        return view('complete');
    }

    //ログイン画面に画面遷移
    public function login(){
        return view('login');
    }

    //新規登録画面へ画面遷移
    public function newRegister(){
        return view('newRegister');
    }

    //登録完了画面へ画面遷移
    public function registerComp(){
        //Userテーブルにユーザー情報を登録
        //name,passの二つの予定

        return view('registerComp');
    }


    //管理者画面に画面遷移
    public function admin(){
        //ログイン処理を追加する
        //Userテーブルにログイン情報を入れる
        return view('admin');
    }
}