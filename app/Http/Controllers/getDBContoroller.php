<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class getDBContoroller extends Controller
{
    //DBのテーブルからデータを取得する

    public function admin(){

        $object = new User();

        $data = $object->getData();

        //viewの呼び出し
        return view('admin');
    }
}
