<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Contact;
use App\Models\Register_user;


use function PHPSTORM_META\map;

class ContactController extends Controller
{
    //入力内容の確認ページへ画面遷移
    public function index(){
        return view('index');
    }

    //入力内容確認ページに画面遷移
    public function confirm(Request $request){
        //セッション情報をcontactsに保存(name基準で読み込む)
        $contacts = $request->all();
        dump($contacts);
        //confirmにセッション情報を渡す
        return view('confirm', ['contacts'=> $contacts]);
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
    //登録内容の確認ページへ画面遷移
    public function newRegisterConfirm(Request $request){

        //セッション情報をregisterに保存
        $register = $request->all();
        dump($register);    
        return view('newRegisterConfirm', ['newRegisterConfirm'=> $register]);
    }

    //登録完了画面へ画面遷移
    public function registerComp(Request $request){
        //Userテーブルにユーザー情報を登録
        Register_user::create([
            "email"     => $request -> email,
            "password"  => $request ->  password
        ]);
        return view('registerComp');
        }

    //管理者画面に画面遷移
    public function admin(){
        //ログイン処理を追加する
        //Userテーブルにログイン情報を入れる
        return view('admin');
    }
}