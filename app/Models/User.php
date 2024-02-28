<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

//DBからデータ取得
class User extends Model{
    protected $fillable = [
        "email",
        "body",
    ];

    //テーブル名の指定  
    protected $table = "contacts";

    //テーブルのデータの取得
    public function getData(){
        $data = User::get();
        return $data;
    }
}