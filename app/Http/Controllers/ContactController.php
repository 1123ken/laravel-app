<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Contact;
use App\Models\contact_id;
use App\Models\Register_user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailContact;
use function PHPSTORM_META\map;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //問い合わせフォームに画面遷移
    public function contactIndex()
    {
        return view('contactIndex');
    }

    //入力内容確認ページに画面遷移
    public function contactConfirm(Request $request)
    {
        //セッション情報をcontactsに保存(name基準で読み込む)
        $contacts = $request->all();
        //confirmにセッション情報を渡す
        return view('contactConfirm', ['contacts' => $contacts]);
    }

    //問い合わせフォーム登録後、完了ページに画面遷移
    public function contactComplete(Request $request)
    {
        //Contactテーブルに問い合わせ内容を登録
        Contact::create([
            "email" => $request->email,
            "body"  => $request->body,
        ]);

        /**********登録時に登録完了メールが送られる*********/
        $maildata = [
            'title' => 'お問い合わせありがとうございます',
            'body' => 'お問い合わせ受付しました',
        ];

        Mail::to($request->email)->send(new SendMailContact($maildata));

        //************************************************/


        return view('contactComplete');
    }
}
