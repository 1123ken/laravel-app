<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailtest;
use App\Mail\SendMailComplete;
use App\Http\Controllers\getDBContoroller;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\CompleteAutoMail;
use App\Mail\ReplyMail;

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

    //返信メールを
    public function reply($data)
    {
        //メールの件名、最初の文
        $mailData = [
            'email' => $data->email,
            'title' => 'お問い合わせの件について',
            'body' => $data->body,
        ];

        //to(送り先の指定)　今は自分のアカウントに送るようになっている
        Mail::to($data['email'])->send(new replyMail($mailData));
        
        //完了後詳細ページに戻る
        return view('replyMailConfirm');    
    }
}
