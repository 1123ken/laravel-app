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
}
