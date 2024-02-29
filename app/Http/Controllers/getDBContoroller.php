<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class getDBContoroller extends Controller{

    protected $contact;

    public function __construct(){
        $this->contact = new Contact();
    }
    
    public function admin(){
        $contacts = $this->contact->findAllContacts();
        dump($contacts);
        return view('admin', compact('contacts'));
    }

    public function contactBody($id){
        //contactの全データ検索してdataに渡す
        //やりたいのは選んだところのidの情報だけ引っ張りたい
        $data = $this->contact->find($id);
        dump($data);
        return view('contactBody', compact('data'));
    }

    public function deleteContacct($id){
        //idから削除
        Contact::find($id)->delete();
    }
}
