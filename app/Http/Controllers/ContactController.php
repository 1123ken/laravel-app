<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Contact;
use App\Models\contact_id;
use App\Models\Register_user;
use Illuminate\Support\Facades\Auth;

use function PHPSTORM_META\map;

class ContactController extends Controller
{
    //問い合わせフォームに画面遷移
    public function index()
    {
        return view('index');
    }

    //入力内容確認ページに画面遷移
    public function confirm(Request $request)
    {
        //セッション情報をcontactsに保存(name基準で読み込む)
        $contacts = $request->all();
        dump($contacts);
        //confirmにセッション情報を渡す
        return view('confirm', ['contacts' => $contacts]);
    }

    //問い合わせフォーム登録後、完了ページに画面遷移
    public function complete(Request $request)
    {
        //Contactテーブルに問い合わせ内容を登録
        Contact::create([
            "email" => $request->email,
            "body"  => $request->body,
        ]);
        return view('complete');
    }

    //ログイン画面に画面遷移
    public function login()
    {
        return view('login');
    }

    //新規登録画面へ画面遷移
    public function newRegister()
    {
        return view('newRegister');
    }
    //登録内容の確認ページへ画面遷移
    public function newRegisterConfirm(Request $request)
    {
        //セッション情報をregisterに保存
        $registers = $request->all();
        dump($registers);
        return view('newRegisterConfirm', ['newRegisterConfirm' => $registers]);
    }

    //新規登録後、登録完了画面へ画面遷移
    public function registerUser(Request $request)
    {
        //Userテーブルにユーザー情報を登録
        $user = Register_user::create([
            "email"     => $request->email,
            "password"  => $request->password
        ]);
        //Authを使用して新規ユーザーとしてログイン
        //パスワードはハッシュ化される
        Auth::login($user);
        //登録完了画面にリダイレクトする
        return redirect()->route(route: 'registerComp');
    }
    public function registerComp()
    {
        //登録完了画面に遷移
        return view('regusterComp');
    }

    //ログアウト処理
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
