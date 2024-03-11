<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//repliesテーブルからデータ操作するModel
class Reply extends Model
{
    
    use HasFactory;
    // //指定したカラム　更新の許可
    protected $fillable = [
        'email',
        'body',
        'reply'
    ];

    
}
