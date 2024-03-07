<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailtest;
use App\Mail\SendMailComplete;
use App\Http\Controllers\getDBContoroller;

class MailController extends Controller
{
    //welcomeから送信できるテストメール
    public function welcome()
    {
        //メールの件名、最初の文
        $mailData = [
            'title' => 'テストメール',
            'body' => 'test test test',
        ];


        //to(送り先の指定)
        Mail::to('1123ken.test.mail@gmail.com')->send(new SendMailtest($mailData));

        dd('メール送信完了');
    }

    //登録完了時に自動で送信されるメール
    public function complete(){
        $maildata = [
            'title' => '登録ありがとうございます',
            'body' => '登録完了しました。',
        ];

        //送り先(セッションから持ってくる？DBから？)
        Mail::to('メール送り先')->send(new SendMailComplete($maildata));
    }
}
