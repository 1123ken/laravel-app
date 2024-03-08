<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Reply;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailContact;
use App\Mail\ReplyMail;

class ContactController extends Controller
{
    //コンストラクタ
    public function __construct()
    {
        $this->middleware('auth');
    }






    //welcomeページへ画面遷移
    public function welcome()
    {
        return view('welcome');
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

        //問い合わせ内容をDBに登録する
        Contact::create([
            "email" => $request->email,
            "body"  => $request->body,
        ]);

        //メール送信に使う内容を変数$maildataに格納
        $maildata = [
            'title' => 'お問い合わせありがとうございます',
            "email" => $request->email,
            "body"  => $request->body,
        ];

        //登録内容をメールで送る
        Mail::to($request->email)->send(new SendMailContact($maildata));

        return view('contactComplete');
    }





    
    //返信内容確認
    public function replyConfirm(Request $request)
    {
        $replydata = $request->all();


        return view('replyConfirm', ['replydata' => $replydata]);

    }

    //返信の処理
    public function replyComplete(Request $request)
    {

        //返信内容をDBに登録する
        Reply::create([
            'email' => $request->email,
            'body'  => $request->body,
            'reply' => $request->reply,
        ]);

        //メールに入れるデータをmaildataに格納
        $maildata = [
            'email' => $request->email,
            'body'  => $request->body,
            'reply' => $request->reply,
        ];

        //返信内容をメールで送信する
        Mail::to($request->email)->send(new ReplyMail($maildata));

        return view('replyComplete');
    }
}
