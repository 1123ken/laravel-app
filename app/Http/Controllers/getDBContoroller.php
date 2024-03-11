<?php

namespace App\Http\Controllers;
use App\Models\Contact;


class getDBContoroller extends Controller{

    protected $contact;

    //コンストラクタ
    public function __construct(){
        //ログイン認証
        $this->contact = new Contact();
        $this->middleware('auth');
    }

    //一覧画面の表示
    public function admin(){
        $contacts = $this->contact->findAllContacts();
        return view('admin', compact('contacts'));
    }

    //詳細画面に問い合わせ内容を表示
    public function contactBody($id){
        //contactの全データ検索してdataに渡す
        $data = $this->contact->find($id);
        return view('contactBody', compact('data'));
    }

    //問い合わせを削除する処理
    public function destroy($id){
        $deleteData = $this->contact->deleteDataById($id);
        //削除したら一覧画面にリダイレクト
        return redirect()->route('admin');  
    }
}
