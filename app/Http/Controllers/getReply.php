<?php

namespace App\Http\Controllers;
use App\Models\Reply;


class getReply extends Controller{

    protected $contact;

    //コンストラクタ
    public function __construct(){
        // $this->reply = new Reply();
        $this->middleware('auth');
    }

    //詳細画面に問い合わせ内容を表示
    public function contactBodyReply($id){
        /**
         * repliesテーブルの返信内容を表示するが表示するためには
         * contactsのidとrepliesのidをjoinして検索かける必要あり
         * repliesテーブルにemailとbodyが入っているのでそこで検索するのもあり
         * （contactsテーブルいらないのでは…？）
         * 今回は時間的に厳しいので余裕があればやりたい…
         */
        
        // $replyData = $this->reply->find($id);
        // return view('contactBody', compact('replyData'));
    }

}
