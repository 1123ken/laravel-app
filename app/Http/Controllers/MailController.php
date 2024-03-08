<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailtest;

class MailController extends Controller
{
    //welcomeページから送信できるテストメール
    public function welcome()
    {
        //メールの件名、最初の文
        $mailData = [
            'title' => 'テストメール',
            'body' => '本文見出し',
        ];


        //to(送り先の指定)　今は自分のアカウントに送るようになっている
        Mail::to('1123ken.test.mail@gmail.com')->send(new SendMailtest($mailData));
        
        dd('メール送信完了');
    }
}
