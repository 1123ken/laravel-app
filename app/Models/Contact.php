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
    public function findAllContacts(){
        return Contact::All();
    }
}
