<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model{
    use HasFactory;
    //指定したカラム　更新の許可
    protected $fillable = [
        'email',
        'body',
    ];

    //contactテーブルから情報を引っ張る
    public function findAllContacts(){
        return Contact::All();
    } 

    //idからの削除処理
    public function deleteDataById($id)
    {
        return $this->destroy($id);
    }
    
}
